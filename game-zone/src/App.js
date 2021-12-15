import { useState } from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import './App.css';
import ForgetPass from './components/ForgetPass';
import Home from './components/Home';
import Log from './components/Log';
import MonCpt from './components/MonCpt';
import Navbar from './components/Navbar';
import Panier from './components/Panier';
import Register from './components/Register';
import { hasAuthenticated } from './services/AuthService';

function App() {

  const [affichePanier, setaffichePanier] = useState(false);
  const [afficheLog, setafficheLog] = useState(false);
  const [isAuthenticated, setisAuthenticated] = useState(hasAuthenticated());

  const handleLog = () => {
    if (affichePanier)
      setaffichePanier(false);
    setafficheLog(!afficheLog);
  }

  const handlePanier = () => {
    if (afficheLog)
      setafficheLog(false);
    setaffichePanier(!affichePanier);
  }

  return (
    <div>
      <BrowserRouter>
        <Navbar handleLog={handleLog} handlePanier={handlePanier} isAuthenticated={isAuthenticated} setisAuthenticated={setisAuthenticated} />
        <Panier affichePanier={affichePanier} handlePanier={handlePanier} />
        <Log afficheLog={afficheLog} handleLog={handleLog} setisAuthenticated={setisAuthenticated} />
        <Routes>
          <Route exact path='/' element={<Home />}></Route>
          <Route exact path='/Register' element={<Register />}></Route>
          <Route exact path='/ForgetPass' element={<ForgetPass />}></Route>
          <Route exact path='/MonCpt' element={<MonCpt />}></Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
