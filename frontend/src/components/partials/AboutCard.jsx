import React from 'react'
import AboutImg from '../../assets/about.jpg'

export default function AboutCard() {
    return (
        // <div className="px-6 flex flex-col items-center justify-center max-w-5xl m-auto md:flex-row my-5">
        //     <div className="w-auto h-20 bg-about">

        //     </div>
        //     {/* <img className="w-full h-auto max-h-96 rounded-l-lg object-cover" src={AboutImg} alt="img" /> */}
        //     <div className="p-5 bg-blue h-auto w-auto sm:w-auto rounded-r-lg">
        //         <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">About Us</h5>
        //         <p className="mb-3 font-normal text-white dark:text-gray-500">We are the first community dedicated 100% to the care of our seniors in a free way. We share your life and help you to make your day-to-day life easier.</p>

        //         <p className="mb-3 font-normal text-white dark:text-gray-500">Our values are based on face-to-face or digital support, depending on the need they want to cover. Through love and help, we add value. We do it locally, from your neighbourhood, from any location, so that no one is left without what they need.</p>

        //         <p className="mb-3 font-normal text-white dark:text-gray-500">Join our community and bring what you do best to the person who needs it.</p>
        //     </div>
        // </div>
        <div class="h-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-auto md:rounded-none md:rounded-l-lg" src={AboutImg} alt="" />

            <div class="w-full justify-between p-4 leading-normal bg-blue">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p className="mb-3 font-normal text-white dark:text-gray-500">We are the first community dedicated 100% to the care of our seniors in a free way. We share your life and help you to make your day-to-day life easier.</p>
                <p className="mb-3 font-normal text-white dark:text-gray-500">Our values are based on face-to-face or digital support, depending on the need they want to cover. Through love and help, we add value. We do it locally, from your neighbourhood, from any location, so that no one is left without what they need.</p>
                <p className="mb-3 font-normal text-white dark:text-gray-500">Join our community and bring what you do best to the person who needs it.</p>
            </div>
        </div>
    )
}
