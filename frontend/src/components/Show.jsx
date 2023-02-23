import React from 'react'
import showImg from '../../assets/images/sharingMoments.jpg'

export default function Show() {
    return (
        <div className='cardBox'>
            <img className="imgCard" src={showImg} alt="Show Service Image" />
            <div>
                <h5 showTitle></h5>
                <p></p>
            </div>
        </div>


    )
}