import axios from "axios";

const baseUrl = "localhost/api";

const mockApi = [
  {
    title: "Ad title 01",
    client: {},
    description:
      "Ad description 01 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
    image: "http://fissep.es/img/bg/acompanamiento.jpg",
    id: 1,
  },
  {
    title: "Ad title 02",
    client: {},
    description:
      "Ad description 02 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
    image: "http://fissep.es/img/bg/acompanamiento.jpg",
    id: 2,
  },
  {
    title: "Ad title 03",
    client: {},
    description:
      "Ad description 03 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
    image: "http://fissep.es/img/bg/acompanamiento.jpg",
    id: 3,
  },
  {
    title: "Ad title 04",
    client: {},
    description:
      "Ad description 04 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
    image: "http://fissep.es/img/bg/acompanamiento.jpg",
    id: 4,
  },
];
const adApiService = {
  getAllAds() {
    //return axios.get(baseUrl).then((response) => response.data);
    return mockApi;
  },
};

export default adApiService;
