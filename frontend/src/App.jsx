import './App.css'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Home from './components/Home'
import About from './components/About'
import Contact from './components/Contact'

function App() {
  return (
    <>
      <Router>
        <Routes>
          <Route path='/' element={<Home></Home>} />
          <Route path='/about' element={<About></About>} />
          <Route path='/contact' element={<Contact></Contact>} />
        </Routes>
      </Router>  
    </>
  )
}

export default App
