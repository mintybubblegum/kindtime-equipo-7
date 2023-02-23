<<<<<<< HEAD
import React, { useState, useEffect } from "react";
import Searchbar from "./partials/Searchbar";
import Card from "../components/partials/Card";
import axios from "axios";

export default function Home() {
  const [data, setData] = useState([]);

  const getData = async () => {
    const { data } = await axios.get("http://localhost:8000/api/servicesApi");
    setData(data.services);
    console.log(data.services);
  };

  useEffect(() => {
    getData();
  }, []);

  return (
    <div className="px-6 mt-6 mb-6 flex flex-col justify-center gap-6 md:px-12 lg:px-40">
      <center>
        <h1
          className="text-2xl font-light italic text-dark-blue"
          data-testid="h1Slogan"
        >
          We share <span className="font-bold">life</span> with your local
          elders. Join the{" "}
          <span className="underline decoration-yellow decoration-2 underline-offset-8">
            community
          </span>
          !
        </h1>
      </center>
      <Searchbar />
      <Card />
      {data &&
        data.map((service) => {
          return (
            <div>
              <h1>{service.name}</h1>
              <p>{service.title}</p>
            </div>
          );
        })}
=======
import React, { useState, useEffect }  from 'react'
import axios from 'axios'

export default function Home() {
  const [search, setSearch] = useState('')

  const [data, setData] = useState(null)
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState(null)

  useEffect(() => {
    const getData = async () => {
      try {
        const response = await axios.get(
          'http://localhost:8000/api/services'
        );
        console.log(response.data)
        setData(response.data)
        setError(null)
      } catch (err) {
        setError(err.message)
        setData(null)
      } finally {
        setLoading(false)
      }
    };
    getData()
  }, []);

  return (
    <div className="px-6 mt-6 mb-6 flex flex-col justify-center gap-6 md:px-12 lg:px-52">
      <center><h1 className="text-2xl font-light italic text-dark-blue">We share <span className="font-bold">life</span> with your local elders. Join the <span className="underline decoration-yellow decoration-2 underline-offset-8">community</span>!</h1></center>

      <form>   
          <label for="default-search" className="mb-2 text-sm font-medium text-gray sr-only dark:text-dark-blue">Search</label>
          <div className="relative">
              <div className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" className="w-5 h-5 text-gray-500 dark:text-dark-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input onChange={(e) => setSearch(e.target.value)} type="search" id="default-search" className="block w-full p-4 pl-10 text-sm text-gray border border-slate-100 rounded-full bg-gray focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-slate-300 dark:placeholder-gray-400 dark:text-dark-blue dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for a service..." required />
          </div>
      </form>

      <div className="flex flex-row gap-6 flex-wrap justify-center sm:justify-between">
        {data && data.services
          .filter((service) => {
            return search.toLowerCase() === '' 
            ? service 
            : service.title.toLowerCase().includes(search)
        })
        .slice(0,6)
        .map((service) => {
          return(
            <div key={service.id} className="max-w-sm sm:max-w-xs bg-dark-blue border border-gray rounded-lg shadow dark:bg-blue dark:border-gray-700">
              <a href="#">
                  <img className="rounded-t-lg" src={service.serviceImg} alt="img" />
              </a>
              <div className="p-5">
                  <a href="#">
                      <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{service.title}</h5>
                  </a>
                  <p className="mb-3 font-normal text-gray-700 dark:text-gray-500">{service.descriptionSm}</p>
                  <div className="flex justify-between">
                    <a href={`/service/${service.id}`} className="inline-flex items-center px-3 py-2 text-sm font-bold text-center text-white bg-dark-blue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-slate-800 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        See more
                        <svg aria-hidden="true" className="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href={`mailto:${service.email}`} className="inline-flex items-center px-3 py-2 text-sm font-bold text-center text-dark-blue bg-yellow rounded-lg hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-slate-800 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Contact
                    </a>
                  </div>
              </div>
            </div>
          )
        })}
      </div>
>>>>>>> develop
    </div>
  )
}
