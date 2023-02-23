import React from 'react'
import AboutImg from '../../assets/about.jpg'

export default function AboutCard() {
    return (
        <div className="flex flex-col items-center jsutify-center md:flex-row my-5">
            <img className="w-auto max-h-96" src={AboutImg} alt="img" />
            <div className="p-5 bg-blue w-auto max-w-md">
                <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">About Us</h5>
                <p className="mb-3 font-normal text-white dark:text-gray-500">We are the first community dedicated 100% to the care of our seniors in a free way. We share your life and help you to make your day-to-day life easier.</p>

                <p className="mb-3 font-normal text-white dark:text-gray-500">Our values are based on face-to-face or digital support, depending on the need they want to cover. Through love and help, we add value. We do it locally, from your neighbourhood, from any location, so that no one is left without what they need.</p>

                <p className="mb-3 font-normal text-white dark:text-gray-500">Join our community and bring what you do best to the person who needs it.</p>
            </div>
        </div>
    )
}
