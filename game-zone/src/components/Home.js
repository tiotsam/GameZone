import React, { useEffect, useState } from 'react'
import '../styles/Home.css'

export default function Home() {

    const [produit, setproduit] = useState([]);
    const [isLoaded, setisLoaded] = useState(false);

    useEffect(() => {
        
        const getProduit = async () => {

            let option = {
                method : 'GET',

            }

            const resp = await fetch( process.env.REACT_APP_URL + '/produits?page=1' , option );
            const prod = await resp.json();
            setproduit(prod["hydra:member"]);
            setisLoaded(true);
        }

        return getProduit();

    }, [])

    console.log(produit);

    if(!isLoaded){
        return (
            <div className='Home'>
                En Cours de Chargement...
            </div>
        )
    }
    else{
        
        return (
            <div className='Home'>
                {isLoaded && <div className='gameWall'>
                    { produit.map(p =>(
                        <div>
                            {/* <h4>{p.nom}</h4> */}
                            
                            <img width='150px' height='200px' src={p.medias[0].lien} alt={'Image de ' + p.nom}></img>
                        </div>
                    ))}
                </div>}
            </div>
        )
    }
}
