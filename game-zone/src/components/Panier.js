import React from 'react'
import '../styles/Panier.css'

export default function Panier({ affichePanier , handlePanier }) {
    return (
        <div className={affichePanier ? 'pShow' : 'phide'}>
            <div className='cache' onClick={() => handlePanier()}></div>
            <div className='panier'>
                <h2>Panier : </h2>
                <h3>Votre panier contient x articles</h3>
                <button>Valider votre commande</button>
            </div>
        </div>

    )
}
