<?php

namespace Bronevik;

use Bronevik\HotelsConnector\Element as Element;
use Bronevik\HotelsConnector\Enum\Currencies;
use Bronevik\HotelsConnector\Enum\Endpoints;


class HotelsConnector
{
    /**
     * Клиент
     *
     * @var \SoapClient
     */
    public $soapClient;

    /**
     * Режим отладки
     *
     * @var bool
     */
    protected $debugMode = false;
    /**
     * @var bool
     */
    protected $trace = true;

    /**
     * Данные авторизации
     *
     * @var Element\Credentials
     */
    protected $credentials;

    /**
     * Язык
     *
     * @var string
     */
    protected $language;

    /**
     * @param string $endpoint
     * @param bool $debugMode
     * @param bool $trace
     */
    public function __construct($endpoint, $debugMode = false, $trace = true)
    {
        $this->debugMode = (bool)$debugMode;
        $this->trace = (bool)$trace;
        $this->createSoapClient($endpoint);
    }

    /**
     *
     * @return boolean
     */
    protected function isDebugMode()
    {
        return $this->debugMode;
    }

    protected function isTraceMode()
    {
        return $this->trace;
    }

    /**
     * @param string $endpoint
     */
    protected function createSoapClient($endpoint)
    {
        $this->soapClient = new \SoapClient(
            Endpoints::$wsdlUrls[$endpoint],
            [
                'location' => $endpoint,
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE,
                'cache_wsdl' => $this->isDebugMode() ? WSDL_CACHE_NONE : WSDL_CACHE_BOTH,
                'trace' => $this->isTraceMode(),
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                'classmap' => [
                    'Amenity' => Element\Amenity::class,
                    'AvailableAmenity' => Element\AvailableAmenity::class,
                    'AvailableMeal' => Element\AvailableMeal::class,
                    'BaseRequest' => Element\BaseRequest::class,
                    'BaseResponse' => Element\BaseResponse::class,
                    'BreakfastInfo' => Element\BreakfastInfo::class,
                    'CancelOrderRequest' => Element\CancelOrderRequest::class,
                    'CancelOrderResponse' => Element\CancelOrderResponse::class,
                    'CancellationPolicy' => Element\CancellationPolicy::class,
                    'City' => Element\City::class,
                    'ClientPriceDetails' => Element\ClientPriceDetails::class,
                    'Contract' => Element\Contract::class,
                    'Country' => Element\Country::class,
                    'CreateOrderRequest' => Element\CreateOrderRequest::class,
                    'CreateOrderResponse' => Element\CreateOrderResponse::class,
                    'Credentials' => Element\Credentials::class,
                    'DailyPrice' => Element\DailyPrice::class,
                    'DetailedPrice' => Element\DetailedPrice::class,
                    'FaultDetail' => Element\FaultDetail::class,
                    'GetAmenitiesRequest' => Element\GetAmenitiesRequest::class,
                    'GetAmenitiesResponse' => Element\GetAmenitiesResponse::class,
                    'GetCitiesRequest' => Element\GetCitiesRequest::class,
                    'GetCitiesResponse' => Element\GetCitiesResponse::class,
                    'GetCountriesRequest' => Element\GetCountriesRequest::class,
                    'GetCountriesResponse' => Element\GetCountriesResponse::class,
                    'GetHotelInfoRequest' => Element\GetHotelInfoRequest::class,
                    'GetHotelInfoResponse' => Element\GetHotelInfoResponse::class,
                    'GetHotelOfferRequest' => Element\GetHotelOfferRequest::class,
                    'GetHotelOfferResponse' => Element\GetHotelOfferResponse::class,
                    'GetMealsRequest' => Element\GetMealsRequest::class,
                    'GetMealsResponse' => Element\GetMealsResponse::class,
                    'GetOrderRequest' => Element\GetOrderRequest::class,
                    'GetOrderResponse' => Element\GetOrderResponse::class,
                    'Hotel' => Element\Hotel::class,
                    'HotelAmenity' => Element\HotelAmenity::class,
                    'HotelOffer' => Element\HotelOffer::class,
                    'HotelOfferCancellationPolicy' => Element\HotelOfferCancellationPolicy::class,
                    'HotelPriceDetails' => Element\HotelPriceDetails::class,
                    'HotelRoom' => Element\HotelRoom::class,
                    'HotelWithInfo' => Element\HotelWithInfo::class,
                    'HotelWithOffers' => Element\HotelWithOffers::class,
                    'Image' => Element\Image::class,
                    'InformationForGuest' => Element\InformationForGuest::class,
                    'Meal' => Element\Meal::class,
                    'NamedDetailedPrice' => Element\NamedDetailedPrice::class,
                    'Order' => Element\Order::class,
                    'OrderService' => Element\OrderService::class,
                    'OrderServiceAccommodation' => Element\OrderServiceAccommodation::class,
                    'PingRequest' => Element\PingRequest::class,
                    'PingResponse' => Element\PingResponse::class,
                    'PriceDetails' => Element\PriceDetails::class,
                    'SearchHotelOffersRequest' => Element\SearchHotelOffersRequest::class,
                    'SearchHotelOffersResponse' => Element\SearchHotelOffersResponse::class,
                    'SearchOfferCriterion' => Element\SearchOfferCriterion::class,
                    'SearchOfferCriterionBreakfastIncluded' => Element\SearchOfferCriterionBreakfastIncluded::class,
                    'SearchOfferCriterionHotelCategory' => Element\SearchOfferCriterionHotelCategory::class,
                    'SearchOfferCriterionHotelName' => Element\SearchOfferCriterionHotelName::class,
                    'SearchOfferCriterionNumberOfGuests' => Element\SearchOfferCriterionNumberOfGuests::class,
                    'SearchOfferCriterionOnlyOnline' => Element\SearchOfferCriterionOnlyOnline::class,
                    'SearchOrderCriterion' => Element\SearchOrderCriterion::class,
                    'SearchOrderCriterionArrivalDate' => Element\SearchOrderCriterionArrivalDate::class,
                    'SearchOrderCriterionCreateDate' => Element\SearchOrderCriterionCreateDate::class,
                    'SearchOrderCriterionGuest' => Element\SearchOrderCriterionGuest::class,
                    'SearchOrderCriterionOrderId' => Element\SearchOrderCriterionOrderId::class,
                    'SearchOrderCriterionServiceId' => Element\SearchOrderCriterionServiceId::class,
                    'SearchOrderCriterionServiceReferenceId' => Element\SearchOrderCriterionServiceReferenceId::class,
                    'SearchOrdersRequest' => Element\SearchOrdersRequest::class,
                    'SearchOrdersResponse' => Element\SearchOrdersResponse::class,
                    'Service' => Element\Service::class,
                    'ServiceAccommodation' => Element\ServiceAccommodation::class,
                    'UpdateOrderRequest' => Element\UpdateOrderRequest::class,
                    'UpdateOrderResponse' => Element\UpdateOrderResponse::class,
                    //update 2.0.3
                    'ServiceExtraField' => Element\ServiceExtraField::class,
                    'Tax' => Element\Tax::class,
                    'OfferPolicy' => Element\OfferPolicy::class,
                    //update 2.1.0
                    'MealPriceDetails' => Element\MealPriceDetails::class,
                    'AvailableMeals' => Element\AvailableMeals::class,
                    'DailyPriceMeals' => Element\DailyPriceMeals::class,
                    'DailyPrices' => Element\DailyPrices::class,
                    'GetHotelOfferPricingRequest' => Element\GetHotelOfferPricingRequest::class,
                    'GetHotelOfferPricingResponse' => Element\GetHotelOfferPricingResponse::class,
                    'GetOrdersChangelogRequest' => Element\GetOrdersChangelogRequest::class,
                    'GetOrdersChangelogResponse' => Element\GetOrdersChangelogResponse::class,
                    'OrdersChangelogRecord' => Element\OrdersChangelogRecord::class,
                    'ChangeList' => Element\ChangeList::class,
                    'Change' => Element\Change::class,
                    'RemoveOrdersChangelogRecordsRequest' => Element\RemoveOrdersChangelogRecordsRequest::class,
                    'RemoveOrdersChangelogRecordsResponse' => Element\RemoveOrdersChangelogRecordsResponse::class,
                ],
            ]);
    }

    public function getLastResponse()
    {
        return $this->soapClient->__getLastResponse();
    }

    public function getLastResponceHeaders()
    {
        return $this->soapClient->__getLastResponseHeaders();
    }

    /**
     * Установка данных для авторизации
     *
     * @param string $login
     * @param string $password
     * @param string $clientKey
     */
    public function setCredentials($login, $password, $clientKey)
    {
        $this->credentials = new Element\Credentials();

        $this->credentials->setLogin($login);
        $this->credentials->setPassword($password);
        $this->credentials->setClientKey($clientKey);
    }

    /**
     * Установка языка
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Проверка связи с сервером
     *
     * @param string $data
     * @return string $data;
     */
    public function ping($data)
    {
        $request = new Element\PingRequest();
        $this->fillRequest($request);

        $request->setData($data);

        return $this->soapClient->ping($request)->data;
    }

    /**
     * Получение списка стран
     *
     * @return Element\Meal[]
     */
    public function getMeals()
    {
        $request = new Element\GetMealsRequest();
        $this->fillRequest($request);

        return $this->soapClient->getMeals($request)->meals;
    }

    /**
     * Получение списка стран
     *
     * @return Element\Country[]
     */
    public function getCountries()
    {
        $request = new Element\GetCountriesRequest();
        $this->fillRequest($request);

        return $this->soapClient->getCountries($request)->countries;
    }

    /**
     * Получение списка городов
     *
     * @param string $countryId
     * @return Element\City[]
     */
    public function getCities($countryId)
    {
        $request = new Element\GetCitiesRequest();
        $this->fillRequest($request);

        $request->setCountryId($countryId);

        return $this->soapClient->getCities($request)->getCities();
    }

    /**
     * Поиск предложений
     *
     * @param string $arrivalDate
     * @param string $departureDate
     * @param string $cityId
     * @param Element\SearchOfferCriterion[] $searchCriteria
     * @param null $hotelId
     * @return Element\HotelWithOffers[]
     */
    public function searchHotelOffers($arrivalDate, $departureDate, $cityId, $searchCriteria = [], $hotelId = null)
    {
        $request = new Element\SearchHotelOffersRequest();
        $this->fillRequest($request);

        $request->setArrivalDate($arrivalDate);
        $request->setDepartureDate($departureDate);
        $request->setCityId($cityId);
        $request->setHotelId($hotelId);
        $request->setCurrency(Currencies::RUSSIAN_RUBLE);

        foreach ($searchCriteria as $criterian) {
            $request->addSearchCriteria($criterian);
        }

        return $this->soapClient->searchHotelOffers($request)->getHotels();
    }

    /**
     * Создание заказа
     *
     * @param Element\CreateOrderRequest $request
     * @return Element\Order
     */
    public function createOrder(Element\CreateOrderRequest $request)
    {
        $this->fillRequest($request);

        return $this->soapClient
            ->createOrder($request)
            ->getOrder();
    }

    /**
     * Получение заказа
     *
     * @param int $orderId
     *
     * @return Element\Order
     */
    public function getOrder($orderId)
    {
        $request = new Element\GetOrderRequest();
        $this->fillRequest($request);

        $request->setOrderId($orderId);

        return $this->soapClient->getOrder($request)->getOrder();
    }

    /**
     * Отмена заказа
     *
     * @param int $orderId
     * @return bool
     */
    public function cancelOrder($orderId)
    {
        $request = new Element\CancelOrderRequest();
        $this->fillRequest($request);

        $request->setOrderId($orderId);

        return $this->soapClient->cancelOrder($request)->result;
    }

    /**
     * Запрос описания отелей
     *
     * @param array $hotelIds
     * @return Element\HotelWithInfo[]
     */
    public function getHotelInfo($hotelIds)
    {
        $request = new Element\GetHotelInfoRequest();
        $this->fillRequest($request);

        foreach ((array)$hotelIds as $id) {
            $request->addHotelId($id);
        }

        return $this->soapClient->getHotelInfo($request)->getHotels();
    }

    /**
     *
     * @param string $offerCode
     * @return Element\HotelOffer
     */
    public function getHotelOffer($offerCode)
    {
        $request = new Element\GetHotelOfferRequest();
        $this->fillRequest($request);

        $request->addOfferCode($offerCode);

        return $this->soapClient->getHotelOffer($request)->getOffer();
    }

    /**
     * @return Element\Amenity[]
     */
    public function getAmenities()
    {
        $request = new Element\GetAmenitiesRequest();
        $this->fillRequest($request);

        return $this->soapClient->getAmenities($request)->amenities;
    }

    /**
     * Поиск закаов по притериям
     * @param Element\SearchOrderCriterion[] $searchCriteria
     * @return Element\Order[]
     */
    public function searchOrders($searchCriteria)
    {
        $request = new Element\SearchOrdersRequest();
        $this->fillRequest($request);

        foreach ($searchCriteria as $criterion) {
            $request->addSearchCriteria($criterion);
        }

        return $this->soapClient->searchOrders($request)->getOrders();
    }

    /**
     * Заполнение запроса всем, чем нужно
     *
     * @param Element\BaseRequest $request
     */
    protected function fillRequest(Element\BaseRequest $request)
    {
        $request->setCredentials($this->credentials);
        $request->setLanguage($this->language);
    }
}
