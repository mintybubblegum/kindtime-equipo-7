import React, { useState, useEffect } from 'react'
import { useParams } from 'react-router-dom'
import axios from 'axios'

export default function Service() {
  const { id } = useParams()

  const [post, setPost] = useState({})

  useEffect(() => {
    const fetchData = async () => {
      const response = await axios.get(`http://localhost:8000/api/services/${id}`);
      const serviceData = response.data
      setPost(serviceData.service);
    };
    fetchData();
  }, [id]);

  return (
    <div className="mt-4 px-4 md:px-12 lg:px-52">
      <div className="mt-4 mb-6 max-w-sm bg-dark-blue border border-gray rounded-lg shadow dark:bg-blue dark:border-gray-700">
        <a href="#">
            <img className="rounded-t-lg" src={post.serviceImg} alt="img" />
        </a>
        <div className="p-5">
            <a href="#">
                <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{post.title}</h5>
            </a>
            <p className="mb-3 font-normal text-gray-700 dark:text-gray-500">{post.descriptionLg}</p>
            <div className="flex justify-between">
              <a href="/" className="inline-flex items-center px-3 py-2 text-sm font-bold text-center text-white bg-dark-blue rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-slate-800 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <i class="fa-solid fa-arrow-left"></i>&nbsp;Back
              </a>
              <a href={`mailto:${post.email}`} className="inline-flex items-center px-3 py-2 text-sm font-bold text-center text-dark-blue bg-yellow rounded-lg hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-slate-800 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Contact
              </a>
            </div>
        </div>
    </div>
  </div>
  )
}
