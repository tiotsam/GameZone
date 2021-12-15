import React, { useEffect, useState } from 'react'
import '../styles/MonCpt.css'

export default function MonCpt() {

    const [user, setuser] = useState(null);
    const [error, seterror] = useState(null)

    useEffect(() => {
        
        const getUser = async () => {

            let option = {
                method : 'GET',
                headers:{
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + sessionStorage.getItem('token')
                  },

            }

            const resp = await fetch( process.env.REACT_APP_URL + '/users/' + JSON.parse(sessionStorage.getItem('user')).id , option );
            const fetchUser = await resp.json();
            setuser(fetchUser);
        }

        return getUser();

    }, [])

    const handleUpdate = (e) => {

        e.preventDefault();

        let option = {
            method : 'PUT',
            body: JSON.stringify({
                
            }),
            headers:{
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + sessionStorage.getItem('token')
              },

        }

    }

    const formatDate = (date) => {
        let dateToFormat = new Date(date);

        let dateFormat = String(dateToFormat.getDate()).padStart(2, '0') + '/' + String(dateToFormat.getMonth() + 1).padStart(2, '0') + '/' + dateToFormat.getFullYear();
        return dateFormat;
    }

    console.log(user);

    if(!user){
        return (
            <div className='Home'>
                En Cours de Chargement...
            </div>
        )
    }
    else{

        return (
            <div className='cptPage'>
                <div className='formContainer'>
                        <h3 className='title'>Mon Compte :</h3>
                    <form className='formUpdate' onSubmit={handleUpdate}>
                        <span>{error}</span>
                        <input className='input-form' type='text' id='prenom' name='prenom' placeholder={user.prenom} />
                        <input className='input-form' type='text' id='nom' name='nom' placeholder={user.nom} />
                        <input className='input-form' type='text' id='email' name='email' placeholder={user.email} />
                        <input className='input-form' type='text' id='pass' name='pass' placeholder='Entrer un mot de passe ' />
                        <input className='input-form' type='text' id='confPass' name='confPass' placeholder='Confirmer le mot de passe ' />
                        <button className='submitBtn' type='submit'>M'enregister</button>
                    </form>
                </div>
                <div className='commandContainer'>
                    <h3 className='title'>Mes commandes :</h3>
                    { user.commandes.map(p =>(
                        <div className='listeCommand'>
                            <div>{'Date commande : ' + formatDate(p.dateCommande)}</div>
                            <div className='statutCmd'>{'Statut : ' + p.statut}</div>
                            
                            {/* <img width='150px' height='200px' src={p.medias[0].lien} alt={'Image de ' + p.nom}></img> */}
                        </div>
                    ))}
                </div>
            </div>
        )
    }
}
