import React from 'react'
import { NavLink } from 'react-router-dom'
import '../styles/Navbar.css'
import { FaUserAlt , FaUserEdit } from 'react-icons/fa';
import { BsSearch , BsBasket3Fill} from 'react-icons/bs';
export default function Navbar({handleLog,handlePanier , isAuthenticated , setisAuthenticated}) {


    const LogOut = () => {

        sessionStorage.removeItem("jwt");
        sessionStorage.removeItem("token");
        sessionStorage.removeItem("panier");
        setisAuthenticated(false);
    }   

    return (
        <nav className='navbar'>
            <NavLink className='homeBtn' exact to="/">
                <span className='Game'>Game</span>
                <span className='Zone'> Zone</span>
            </NavLink>
            <div className='searchbar'>
                <form className='searchForm' method='GET' action='/Research'>
                    <button className='categ'>Catégories</button>
                    <input className='search' type='text' placeholder='Entrer votre recherche'></input>
                    <button type='submit'><BsSearch className='sub'/></button>
                </form>                
            </div>
            { !isAuthenticated && <div className='cptBtn'>
                <FaUserAlt onClick={() => handleLog()} />
                <button onClick={() => handleLog()}>Se connecter</button>
            </div>}
            { isAuthenticated && <div className='cptBtn'>
                <NavLink exact to="/MonCpt">
                    <FaUserEdit/>
                </NavLink>
                <span onClick={() => LogOut()}>Compte {JSON.parse(sessionStorage.getItem('user')).prenom}</span>
                <button onClick={() => LogOut()}>Se déconnecter</button>
            </div>}

            <div className='panierBtn'>
                <BsBasket3Fill onClick={() => handlePanier()} />
                <button onClick={() => handlePanier()}>Mon Panier</button>
            </div>
        </nav>
    )
}
