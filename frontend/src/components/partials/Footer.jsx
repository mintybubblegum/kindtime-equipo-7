import React from 'react'

export default function Footer() {
  return (
    <div>
      <footer class="bottom-0 w-full p-4 bg-dark-blue shadow md:flex md:items-center md:justify-between md:p-7 dark:bg-gray-900 lg:px-20">
          <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">Kindtime™</a>. All Rights Reserved.
          </span>
          <ul class="flex flex-wrap items-center mt-3 text-sm text-white dark:text-gray-400 sm:mt-0">
              <li>
                  <a href="/about" class="mr-4 hover:underline md:mr-6 ">About</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
              </li>
              <li>
                  <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
              </li>
              <li>
                  <a href="/contact" class="hover:underline">Contact</a>
              </li>
          </ul>
      </footer>
    </div>
  )
}
