Price Code Kata
===============

This code kata was prepared on [http://piotrpasich.com/friday-dopamine-dump/](http://piotrpasich.com/friday-dopamine-dump/) article.

Goal
-----------
There is no doubts that we do application for business and the business wants to earn money. It’s a common problem – how to calculate prices. You can have a regular prices, with different level of taxes, with discounts or without, calculated per piece or per weight.

The goal of this kata is to practice a looser style of experimental modelling. Look for as many different ways of handling the issues as possible. Consider the various tradeoffs of each. What techniques use best for exploring these models? For recording them? How can you validate a model is reasonable?

We need to create an extensible architecture, but I would like to make the task harder – let’s base this architecture on at least one known design pattern and call it. I believe that consolidation of knowledge can be achieved by exercises.

Our preliminary requirements:

* Regular price per piece
* Regular price per weight
* Taxes on different levels (8%, 12%, 17%, 23%, depends on article type)
* Discounts (system discounts or custom discounts)
* buy two, get one free (so does the third item have a price?)
* three for a dollar (so what’s the price if I buy 4, or 5?)
* how to add shipment cost in the future?
* others?

There might be more options, of course.

The kata should take about 1 hour. After that time you can stop, continue, or remove the code and start from the beginning. The process and exercise matter, not the result itself. This is why this example is not finished.

Installation
-----------

```
curl http://getcomposer.org/installer | php
php composer.phar install
```

or

```
composer install
```

Usage
-----------

```
bin/phpspec run
```
