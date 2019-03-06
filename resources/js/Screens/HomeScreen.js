import React from "react";
import {asset} from "../app/utils";
import BaseScreen from "./BaseScreen";
import Screen from "../Components/Screen";
import Carousel from "../Components/Carousel";
import Header from "../Components/Header";
import Nav from "../Components/Nav";
import Title from "../Components/Title";
import Products from "../Components/Products";
import ScrollIndicator from "../Components/ScrollIndicator";
import ProductFactory from "../app/Factories/ProductFactory";

const CAROUSEL_ITEMS = [];
const PRODUCTS = [];

for (let i = 0; i < 4; i++) {
    CAROUSEL_ITEMS.push(asset('img/carousel/0.jpg'));
}

for (let i = 0; i < 6; i++) {
    PRODUCTS.push(ProductFactory());
}

export default class HomeScreen extends BaseScreen {
    render() {
        return (
            <Screen name="Home">
                <Header/>
                <Nav/>

                <Carousel>
                    {CAROUSEL_ITEMS.map((item, index) => (
                        <Carousel.Item key={`carousel-item-${index}`}>
                            <img src={item} alt={`Carousel item ${index + 1}`} className="img-responsive"/>
                        </Carousel.Item>
                    ))}
                </Carousel>

                <Title>Shop</Title>

                <Products products={PRODUCTS}/>

                <ScrollIndicator direction="down"/>
            </Screen>
        );
    }
}
