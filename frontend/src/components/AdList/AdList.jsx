import React, { useEffect, useState } from "react";
import adApiService from "../../apiServices/apiServices";
import Ad from "../Ad/Ad";
import styles from "./AdList.module.css";
// const data = [
//   {
//     title: "Ad title 01",
//     client: {},
//     description:
//       "Ad description 01 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
//     image: "http://fissep.es/img/bg/acompanamiento.jpg",
//     id: 1,
//   },
//   {
//     title: "Ad title 02",
//     client: {},
//     description:
//       "Ad description 02 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
//     image: "http://fissep.es/img/bg/acompanamiento.jpg",
//     id: 2,
//   },
//   {
//     title: "Ad title 03",
//     client: {},
//     description:
//       "Ad description 03 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
//     image: "http://fissep.es/img/bg/acompanamiento.jpg",
//     id: 3,
//   },
//   {
//     title: "Ad title 04",
//     client: {},
//     description:
//       "Ad description 04 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
//     image: "http://fissep.es/img/bg/acompanamiento.jpg",
//     id: 4,
//   },
// ];
const AdList = () => {
  const [adList, setAdList] = useState([]);

  useEffect(() => {
    //onLoad() load api¿?
    setAdList(adApiService.getAllAds());
  }, []);

  return (
    <div className={`${styles.adContainer}`}>
      {adList.map((ad) => (
        <Ad key={ad.id} ad={ad} />
      ))}
    </div>
  );
};

export default AdList;
