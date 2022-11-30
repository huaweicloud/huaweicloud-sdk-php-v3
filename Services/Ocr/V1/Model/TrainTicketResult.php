<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrainTicketResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrainTicketResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  是否改签票, \"Yes\"表示改签票，\"No\"表示非改签票。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketId' => 'string',
            'checkPort' => 'string',
            'trainNumber' => 'string',
            'departureStation' => 'string',
            'destinationStation' => 'string',
            'departureStationEn' => 'string',
            'destinationStationEn' => 'string',
            'departureTime' => 'string',
            'seatNumber' => 'string',
            'ticketPrice' => 'string',
            'saleMethod' => 'string',
            'seatCategory' => 'string',
            'ticketChanging' => 'string',
            'idNumber' => 'string',
            'name' => 'string',
            'logId' => 'string',
            'saleLocation' => 'string',
            'confidence' => 'object',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  是否改签票, \"Yes\"表示改签票，\"No\"表示非改签票。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketId' => null,
        'checkPort' => null,
        'trainNumber' => null,
        'departureStation' => null,
        'destinationStation' => null,
        'departureStationEn' => null,
        'destinationStationEn' => null,
        'departureTime' => null,
        'seatNumber' => null,
        'ticketPrice' => null,
        'saleMethod' => null,
        'seatCategory' => null,
        'ticketChanging' => null,
        'idNumber' => null,
        'name' => null,
        'logId' => null,
        'saleLocation' => null,
        'confidence' => null,
        'textLocation' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  是否改签票, \"Yes\"表示改签票，\"No\"表示非改签票。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketId' => 'ticket_id',
            'checkPort' => 'check_port',
            'trainNumber' => 'train_number',
            'departureStation' => 'departure_station',
            'destinationStation' => 'destination_station',
            'departureStationEn' => 'departure_station_en',
            'destinationStationEn' => 'destination_station_en',
            'departureTime' => 'departure_time',
            'seatNumber' => 'seat_number',
            'ticketPrice' => 'ticket_price',
            'saleMethod' => 'sale_method',
            'seatCategory' => 'seat_category',
            'ticketChanging' => 'ticket_changing',
            'idNumber' => 'id_number',
            'name' => 'name',
            'logId' => 'log_id',
            'saleLocation' => 'sale_location',
            'confidence' => 'confidence',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  是否改签票, \"Yes\"表示改签票，\"No\"表示非改签票。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketId' => 'setTicketId',
            'checkPort' => 'setCheckPort',
            'trainNumber' => 'setTrainNumber',
            'departureStation' => 'setDepartureStation',
            'destinationStation' => 'setDestinationStation',
            'departureStationEn' => 'setDepartureStationEn',
            'destinationStationEn' => 'setDestinationStationEn',
            'departureTime' => 'setDepartureTime',
            'seatNumber' => 'setSeatNumber',
            'ticketPrice' => 'setTicketPrice',
            'saleMethod' => 'setSaleMethod',
            'seatCategory' => 'setSeatCategory',
            'ticketChanging' => 'setTicketChanging',
            'idNumber' => 'setIdNumber',
            'name' => 'setName',
            'logId' => 'setLogId',
            'saleLocation' => 'setSaleLocation',
            'confidence' => 'setConfidence',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketId  火车票左上角的车票ID。
    * checkPort  检票口信息。
    * trainNumber  车次。
    * departureStation  始发站。
    * destinationStation  终点站。
    * departureStationEn  始发站拼音。
    * destinationStationEn  终点站拼音。
    * departureTime  开车时间。
    * seatNumber  座位号。
    * ticketPrice  票价。
    * saleMethod  售票方式。
    * seatCategory  座位类别。
    * ticketChanging  是否改签票, \"Yes\"表示改签票，\"No\"表示非改签票。
    * idNumber  车票持有人的身份证号。
    * name  车票持有人姓名。
    * logId  车票最下方的序列号。
    * saleLocation  车票售票地点。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketId' => 'getTicketId',
            'checkPort' => 'getCheckPort',
            'trainNumber' => 'getTrainNumber',
            'departureStation' => 'getDepartureStation',
            'destinationStation' => 'getDestinationStation',
            'departureStationEn' => 'getDepartureStationEn',
            'destinationStationEn' => 'getDestinationStationEn',
            'departureTime' => 'getDepartureTime',
            'seatNumber' => 'getSeatNumber',
            'ticketPrice' => 'getTicketPrice',
            'saleMethod' => 'getSaleMethod',
            'seatCategory' => 'getSeatCategory',
            'ticketChanging' => 'getTicketChanging',
            'idNumber' => 'getIdNumber',
            'name' => 'getName',
            'logId' => 'getLogId',
            'saleLocation' => 'getSaleLocation',
            'confidence' => 'getConfidence',
            'textLocation' => 'getTextLocation'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['checkPort'] = isset($data['checkPort']) ? $data['checkPort'] : null;
        $this->container['trainNumber'] = isset($data['trainNumber']) ? $data['trainNumber'] : null;
        $this->container['departureStation'] = isset($data['departureStation']) ? $data['departureStation'] : null;
        $this->container['destinationStation'] = isset($data['destinationStation']) ? $data['destinationStation'] : null;
        $this->container['departureStationEn'] = isset($data['departureStationEn']) ? $data['departureStationEn'] : null;
        $this->container['destinationStationEn'] = isset($data['destinationStationEn']) ? $data['destinationStationEn'] : null;
        $this->container['departureTime'] = isset($data['departureTime']) ? $data['departureTime'] : null;
        $this->container['seatNumber'] = isset($data['seatNumber']) ? $data['seatNumber'] : null;
        $this->container['ticketPrice'] = isset($data['ticketPrice']) ? $data['ticketPrice'] : null;
        $this->container['saleMethod'] = isset($data['saleMethod']) ? $data['saleMethod'] : null;
        $this->container['seatCategory'] = isset($data['seatCategory']) ? $data['seatCategory'] : null;
        $this->container['ticketChanging'] = isset($data['ticketChanging']) ? $data['ticketChanging'] : null;
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['saleLocation'] = isset($data['saleLocation']) ? $data['saleLocation'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets ticketId
    *  火车票左上角的车票ID。
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 火车票左上角的车票ID。
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets checkPort
    *  检票口信息。
    *
    * @return string|null
    */
    public function getCheckPort()
    {
        return $this->container['checkPort'];
    }

    /**
    * Sets checkPort
    *
    * @param string|null $checkPort 检票口信息。
    *
    * @return $this
    */
    public function setCheckPort($checkPort)
    {
        $this->container['checkPort'] = $checkPort;
        return $this;
    }

    /**
    * Gets trainNumber
    *  车次。
    *
    * @return string|null
    */
    public function getTrainNumber()
    {
        return $this->container['trainNumber'];
    }

    /**
    * Sets trainNumber
    *
    * @param string|null $trainNumber 车次。
    *
    * @return $this
    */
    public function setTrainNumber($trainNumber)
    {
        $this->container['trainNumber'] = $trainNumber;
        return $this;
    }

    /**
    * Gets departureStation
    *  始发站。
    *
    * @return string|null
    */
    public function getDepartureStation()
    {
        return $this->container['departureStation'];
    }

    /**
    * Sets departureStation
    *
    * @param string|null $departureStation 始发站。
    *
    * @return $this
    */
    public function setDepartureStation($departureStation)
    {
        $this->container['departureStation'] = $departureStation;
        return $this;
    }

    /**
    * Gets destinationStation
    *  终点站。
    *
    * @return string|null
    */
    public function getDestinationStation()
    {
        return $this->container['destinationStation'];
    }

    /**
    * Sets destinationStation
    *
    * @param string|null $destinationStation 终点站。
    *
    * @return $this
    */
    public function setDestinationStation($destinationStation)
    {
        $this->container['destinationStation'] = $destinationStation;
        return $this;
    }

    /**
    * Gets departureStationEn
    *  始发站拼音。
    *
    * @return string|null
    */
    public function getDepartureStationEn()
    {
        return $this->container['departureStationEn'];
    }

    /**
    * Sets departureStationEn
    *
    * @param string|null $departureStationEn 始发站拼音。
    *
    * @return $this
    */
    public function setDepartureStationEn($departureStationEn)
    {
        $this->container['departureStationEn'] = $departureStationEn;
        return $this;
    }

    /**
    * Gets destinationStationEn
    *  终点站拼音。
    *
    * @return string|null
    */
    public function getDestinationStationEn()
    {
        return $this->container['destinationStationEn'];
    }

    /**
    * Sets destinationStationEn
    *
    * @param string|null $destinationStationEn 终点站拼音。
    *
    * @return $this
    */
    public function setDestinationStationEn($destinationStationEn)
    {
        $this->container['destinationStationEn'] = $destinationStationEn;
        return $this;
    }

    /**
    * Gets departureTime
    *  开车时间。
    *
    * @return string|null
    */
    public function getDepartureTime()
    {
        return $this->container['departureTime'];
    }

    /**
    * Sets departureTime
    *
    * @param string|null $departureTime 开车时间。
    *
    * @return $this
    */
    public function setDepartureTime($departureTime)
    {
        $this->container['departureTime'] = $departureTime;
        return $this;
    }

    /**
    * Gets seatNumber
    *  座位号。
    *
    * @return string|null
    */
    public function getSeatNumber()
    {
        return $this->container['seatNumber'];
    }

    /**
    * Sets seatNumber
    *
    * @param string|null $seatNumber 座位号。
    *
    * @return $this
    */
    public function setSeatNumber($seatNumber)
    {
        $this->container['seatNumber'] = $seatNumber;
        return $this;
    }

    /**
    * Gets ticketPrice
    *  票价。
    *
    * @return string|null
    */
    public function getTicketPrice()
    {
        return $this->container['ticketPrice'];
    }

    /**
    * Sets ticketPrice
    *
    * @param string|null $ticketPrice 票价。
    *
    * @return $this
    */
    public function setTicketPrice($ticketPrice)
    {
        $this->container['ticketPrice'] = $ticketPrice;
        return $this;
    }

    /**
    * Gets saleMethod
    *  售票方式。
    *
    * @return string|null
    */
    public function getSaleMethod()
    {
        return $this->container['saleMethod'];
    }

    /**
    * Sets saleMethod
    *
    * @param string|null $saleMethod 售票方式。
    *
    * @return $this
    */
    public function setSaleMethod($saleMethod)
    {
        $this->container['saleMethod'] = $saleMethod;
        return $this;
    }

    /**
    * Gets seatCategory
    *  座位类别。
    *
    * @return string|null
    */
    public function getSeatCategory()
    {
        return $this->container['seatCategory'];
    }

    /**
    * Sets seatCategory
    *
    * @param string|null $seatCategory 座位类别。
    *
    * @return $this
    */
    public function setSeatCategory($seatCategory)
    {
        $this->container['seatCategory'] = $seatCategory;
        return $this;
    }

    /**
    * Gets ticketChanging
    *  是否改签票, \"Yes\"表示改签票，\"No\"表示非改签票。
    *
    * @return string|null
    */
    public function getTicketChanging()
    {
        return $this->container['ticketChanging'];
    }

    /**
    * Sets ticketChanging
    *
    * @param string|null $ticketChanging 是否改签票, \"Yes\"表示改签票，\"No\"表示非改签票。
    *
    * @return $this
    */
    public function setTicketChanging($ticketChanging)
    {
        $this->container['ticketChanging'] = $ticketChanging;
        return $this;
    }

    /**
    * Gets idNumber
    *  车票持有人的身份证号。
    *
    * @return string|null
    */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
    * Sets idNumber
    *
    * @param string|null $idNumber 车票持有人的身份证号。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets name
    *  车票持有人姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 车票持有人姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets logId
    *  车票最下方的序列号。
    *
    * @return string|null
    */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
    * Sets logId
    *
    * @param string|null $logId 车票最下方的序列号。
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets saleLocation
    *  车票售票地点。
    *
    * @return string|null
    */
    public function getSaleLocation()
    {
        return $this->container['saleLocation'];
    }

    /**
    * Sets saleLocation
    *
    * @param string|null $saleLocation 车票售票地点。
    *
    * @return $this
    */
    public function setSaleLocation($saleLocation)
    {
        $this->container['saleLocation'] = $saleLocation;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets textLocation
    *  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

