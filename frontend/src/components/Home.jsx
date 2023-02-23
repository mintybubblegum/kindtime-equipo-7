import React, { useState, useEffect }  from 'react'
import Searchbar from './partials/Searchbar'
import Card from '../components/partials/Card'
import axios from 'axios'

export default function Home() {
  const [data, setData] = useState([])

  const getData = async () => {
    const { data } = await axios.get('http://localhost:8000/api/services');
    setData(data.services)
    console.log(data.services)
  }

  useEffect(() => {
    getData()
  }, [])

  return (
    <div className="px-6 mt-6 mb-6 flex flex-col justify-center gap-6 md:px-12 lg:px-40">
      <center><h1 className="text-2xl font-light italic text-dark-blue">We share <span className="font-bold">life</span> with your local elders. Join the <span className="underline decoration-yellow decoration-2 underline-offset-8">community</span>!</h1></center>
      <Searchbar />
      <Card />
      {data && data.map((service)=>{
        return(
          <div>
            <h1>{service.name}</h1>
            <p>{service.title}</p>
          </div>
        )
      })}
    </div>
  )
}
