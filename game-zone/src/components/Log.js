import jwtDecode from 'jwt-decode';
import React, { useState } from 'react'
import { NavLink } from 'react-router-dom'
import '../styles/Log.css'

export default function Log({ afficheLog , handleLog , setisAuthenticated }) {

    const [error, seterror] = useState(null);

    const Login = async (e) =>{
        
        e.preventDefault();
        
        let option = {
            method: 'POST',
            body: JSON.stringify({
                username: e.target.email.value,
                password: e.target.pass.value,
            }),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
        }

        const resp = await fetch( process.env.REACT_APP_URL + '/login' , option );

        if(resp.status === 200){
            
            const jwt = await resp.json();

            let user = {
                id : jwtDecode(jwt.token).id,
                email : jwtDecode(jwt.token).username,
                prenom : jwtDecode(jwt.token).prenom,
                role : jwtDecode(jwt.token).roles
            }
            
            sessionStorage.setItem('user', JSON.stringify(user));
            sessionStorage.setItem('token', jwt.token);

            setisAuthenticated(true);
            handleLog();

        }
        else if(resp.status === 200){
            let obj = await resp.json();
            seterror(obj.message);
        }

    }

    

    return (
        <div className={afficheLog ? 'pLog' : 'Loghidden'}>
            <div className='cacheL' onClick={() => handleLog()}></div>
            <div className='Log'>
                <span>{error}</span>
                <form className='form' onSubmit={Login}>
                    <div className='form-element'>
                        <label>Email : </label>
                        <input type='text' id='email' name='email' placeholder='Entrer votre email'></input>
                    </div>
                    <div className='form-element'>
                        <label>Mot de passe : </label>
                        <input type='password' id='pass' name='pass' placeholder='Entrer votre mot de passe'></input>
                        <NavLink onClick={() => handleLog()} exact to="/ForgetPass">Mot de passe oublié ?</NavLink>
                    </div>

                    <input type='submit' value='Se connecter'></input>
                </form>
                <NavLink className='registerBtn' onClick={() => handleLog()} exact to="/Register">Créer un compte</NavLink>
            </div>
        </div>
    )
}
