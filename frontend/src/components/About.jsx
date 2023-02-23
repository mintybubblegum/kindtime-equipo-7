import React from "react";
import Back from "./partials/Back";
import aboutImg from '../assets/factory-img/about-img.jpg'

export default function About() {
  return (
    <div className="sm:mb-48">
      <div className="mt-4 px-6 sm:52 md:px-32 lg:px-52">
        <Back />
      </div>
      <div class="-mt-4 p-6 flex flex-col lg:flex-row items-center justify-center">
        <img src={ aboutImg } alt="" class="w-full md:w-md max-w-lg" />

        <div class="w-auto h-full max-w-lg p-6 bg-blue">
          <h2 class="text-2xl text-white font-bold mb-4">About Us</h2>

          <p className="text-white mb-7 text-sm">
            We are the first community dedicated 100% to the care of our seniors
            in a free way. We share your life and help you to make your
            day-to-day life easier.
          </p>

          <p className="text-white mb-5 text-sm">
            Our values are based on face-to-face or digital support, depending
            on the need they want to cover. Through love and help, we add value.
            We do it locally, from your neighbourhood, from any location, so
            that no one is left without what they need.
          </p>

          <p className="text-white mb-5 text-sm">
            Join our community and bring what you do best to the person who
            needs it.
          </p>
        </div>
      </div>
    </div>
  );
}
