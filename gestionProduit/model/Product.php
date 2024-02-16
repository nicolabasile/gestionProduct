<?php

class Product
{
    private string $id;
    private string $name;
    private string $numProduct;
    private string $Price;
    private string $Description;
    
    public function __construct(string $id, string $name, string $numProduct, string $price, string $Description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->numProduct = $numProduct;
        $this->Price = $price;
        $this->Description = $Description;}

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name): self
        {
                $this->name = $name;

                return $this;
        }




    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
    

        /**
         * Get the value of numProduct
         */
        public function getNumProduct()
        {
                return $this->numProduct;
        }

        /**
         * Set the value of numProduct
         */
        public function setNumProduct($numProduct): self
        {
                $this->numProduct = $numProduct;

                return $this;
        }
        

        /**
         * Get the value of price
         */
        public function getPrice()
        {
                return $this->Price;
        }

        /**
         * Set the value of price
         */
        public function setPrice($price): self
        {
                $this->Price = $price;

                return $this;
        }
        

        /**
         * Get the value of Description
         */
        public function getDescription()
        {
                return $this->Description;
        }

        /**
         * Set the value of Description
         */
        public function setDescription($Description): self
        {
                $this->Description = $Description;

                return $this;
        }
        public function __toString()
        {
            return "<br> id :". $this->id .
                   '<br> name :'. $this->name.
                   '<br> numProduct :'. $this->numProduct .
                   '<br> price: '. $this->Price.

            " <br> description". $this->Description.'<br>';
        }
    }
