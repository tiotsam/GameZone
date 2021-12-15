import { getSuggestedQuery } from '@testing-library/dom'
import React, { useEffect, useState } from 'react'
import '../styles/Register.css'

export default function Register() {
    
    const [error, seterror] = useState(null);

    const handleRegister = async (e) => {
        e.preventDefault();

        if( e.target.pass.value !== e.target.confPass.value ){
            seterror('Le mot de passe ne correspond pas à la confirmation');
        }
        else{

            let option = {
                method : 'POST',
                body: JSON.stringify({
                    nom: e.target.nom.value,
                    prenom: e.target.prenom.value,
                    email: e.target.email.value,
                    password: e.target.pass.value,
                    roles : ["ROLE_USER"]
                }),
                headers:{
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                  },
            }

            const resp = await fetch( process.env.REACT_APP_URL + '/register' , option);
            
            if ( resp.status !== 200){
                const items = await resp.json();
                seterror(items)
            }

        }
    }

    return (
        <div className='register'>
            <div className='img'></div>
            <form className='formRegister' onSubmit={handleRegister}>
                <h2 className='registerTitle'>Bienvenue sur Game Zone !!!</h2>
                <span>{error}</span>
                <input required className='input-form' type='text' id='prenom' name='prenom' placeholder='Entrer votre prenom' />
                <input required className='input-form' type='text' id='nom' name='nom' placeholder='Entrer votre nom' />
                <input required className='input-form' type='text' id='email' name='email' placeholder='Entrer votre Adresse mail' />
                <input required className='input-form' type='text' id='pass' name='pass' placeholder='Entrer un mot de passe ' />
                <input required className='input-form' type='text' id='confPass' name='confPass' placeholder='Confirmer le mot de passe ' />
                <button className='submitBtn' type='submit'>M'enregister</button>
            </form>
        </div>
    )
}
