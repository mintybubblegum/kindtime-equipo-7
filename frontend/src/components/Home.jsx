import React from 'react'
import Searchbar from './partials/Searchbar'
import Card from '../components/partials/Card'
import axios from 'axios'

export default function Home() {
  const [data, setData] = useState([])

  const getData = async () => {
    const { data } = await axios.get('http://localhost:8000/api/services', {
    })
    setData(data)
  }

  useEffect(() => {
    getData()
  }, [])

  return (
    <div className="px-6 mt-6 mb-6 flex flex-col justify-center gap-6 md:px-12 lg:px-40">
      <center><h1 className="text-2xl font-light italic text-dark-blue">We share <span className="font-bold">life</span> with your local elders. Join the <span className="underline decoration-yellow decoration-2 underline-offset-8">community</span>!</h1></center>
      <Searchbar />
      <Card />
      {/* {data.slice(0,6).map(project => (
              <div key={project.id} className="w-full relative drop-shadow-xl border-gray-300 rounded-lg lg:w-2/5 dark:border-gray-100">
                <img className="rounded-lg h-56 object-cover w-full lg:h-56 lg:basis-11" src={project.image} alt="behance" />
                <div className="w-full absolute bottom-0 bg-black p-4 rounded-b-lg dark:bg-black">
                  <h2 className="text-xl font-semibold text-neutral-50 dark:text-neutral-50">{project.name}</h2>
                  <p className="text-sm font-light text-neutral-50 dark:text-neutral-50">{project.text}</p>
                </div>
              </div>
            ))} */}
    </div>
  )
}
