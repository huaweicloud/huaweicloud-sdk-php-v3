<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaxiInvoiceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaxiInvoiceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * location  归属地区。
    * code  发票代码。
    * number  发票号码。
    * phoneNumber  电话（包括电话、监督电话）。
    * company  单位。
    * taxiNumber  车号。
    * certificateNumber  证号。
    * identificationNumber  识别编号。
    * date  开票日期。
    * boardingTime  上车时间。
    * alightingTime  下车时间。
    * time  时间(起止时间、上下车时间)。
    * unitPrice  单价。
    * distance  总里程。
    * waitingTime  等候时间。
    * fare  金额。
    * fuelOilSurcharge  燃油附加费。
    * callServiceSurcharge  电调费（预约费）。
    * total  实收金额。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'location' => 'string',
            'code' => 'string',
            'number' => 'string',
            'phoneNumber' => 'string',
            'company' => 'string',
            'taxiNumber' => 'string',
            'certificateNumber' => 'string',
            'identificationNumber' => 'string',
            'date' => 'string',
            'boardingTime' => 'string',
            'alightingTime' => 'string',
            'time' => 'string',
            'unitPrice' => 'string',
            'distance' => 'string',
            'waitingTime' => 'string',
            'fare' => 'string',
            'fuelOilSurcharge' => 'string',
            'callServiceSurcharge' => 'string',
            'total' => 'string',
            'confidence' => 'object',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * location  归属地区。
    * code  发票代码。
    * number  发票号码。
    * phoneNumber  电话（包括电话、监督电话）。
    * company  单位。
    * taxiNumber  车号。
    * certificateNumber  证号。
    * identificationNumber  识别编号。
    * date  开票日期。
    * boardingTime  上车时间。
    * alightingTime  下车时间。
    * time  时间(起止时间、上下车时间)。
    * unitPrice  单价。
    * distance  总里程。
    * waitingTime  等候时间。
    * fare  金额。
    * fuelOilSurcharge  燃油附加费。
    * callServiceSurcharge  电调费（预约费）。
    * total  实收金额。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'location' => null,
        'code' => null,
        'number' => null,
        'phoneNumber' => null,
        'company' => null,
        'taxiNumber' => null,
        'certificateNumber' => null,
        'identificationNumber' => null,
        'date' => null,
        'boardingTime' => null,
        'alightingTime' => null,
        'time' => null,
        'unitPrice' => null,
        'distance' => null,
        'waitingTime' => null,
        'fare' => null,
        'fuelOilSurcharge' => null,
        'callServiceSurcharge' => null,
        'total' => null,
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
    * location  归属地区。
    * code  发票代码。
    * number  发票号码。
    * phoneNumber  电话（包括电话、监督电话）。
    * company  单位。
    * taxiNumber  车号。
    * certificateNumber  证号。
    * identificationNumber  识别编号。
    * date  开票日期。
    * boardingTime  上车时间。
    * alightingTime  下车时间。
    * time  时间(起止时间、上下车时间)。
    * unitPrice  单价。
    * distance  总里程。
    * waitingTime  等候时间。
    * fare  金额。
    * fuelOilSurcharge  燃油附加费。
    * callServiceSurcharge  电调费（预约费）。
    * total  实收金额。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'location' => 'location',
            'code' => 'code',
            'number' => 'number',
            'phoneNumber' => 'phone_number',
            'company' => 'company',
            'taxiNumber' => 'taxi_number',
            'certificateNumber' => 'certificate_number',
            'identificationNumber' => 'identification_number',
            'date' => 'date',
            'boardingTime' => 'boarding_time',
            'alightingTime' => 'alighting_time',
            'time' => 'time',
            'unitPrice' => 'unit_price',
            'distance' => 'distance',
            'waitingTime' => 'waiting_time',
            'fare' => 'fare',
            'fuelOilSurcharge' => 'fuel_oil_surcharge',
            'callServiceSurcharge' => 'call_service_surcharge',
            'total' => 'total',
            'confidence' => 'confidence',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * location  归属地区。
    * code  发票代码。
    * number  发票号码。
    * phoneNumber  电话（包括电话、监督电话）。
    * company  单位。
    * taxiNumber  车号。
    * certificateNumber  证号。
    * identificationNumber  识别编号。
    * date  开票日期。
    * boardingTime  上车时间。
    * alightingTime  下车时间。
    * time  时间(起止时间、上下车时间)。
    * unitPrice  单价。
    * distance  总里程。
    * waitingTime  等候时间。
    * fare  金额。
    * fuelOilSurcharge  燃油附加费。
    * callServiceSurcharge  电调费（预约费）。
    * total  实收金额。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $setters = [
            'location' => 'setLocation',
            'code' => 'setCode',
            'number' => 'setNumber',
            'phoneNumber' => 'setPhoneNumber',
            'company' => 'setCompany',
            'taxiNumber' => 'setTaxiNumber',
            'certificateNumber' => 'setCertificateNumber',
            'identificationNumber' => 'setIdentificationNumber',
            'date' => 'setDate',
            'boardingTime' => 'setBoardingTime',
            'alightingTime' => 'setAlightingTime',
            'time' => 'setTime',
            'unitPrice' => 'setUnitPrice',
            'distance' => 'setDistance',
            'waitingTime' => 'setWaitingTime',
            'fare' => 'setFare',
            'fuelOilSurcharge' => 'setFuelOilSurcharge',
            'callServiceSurcharge' => 'setCallServiceSurcharge',
            'total' => 'setTotal',
            'confidence' => 'setConfidence',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * location  归属地区。
    * code  发票代码。
    * number  发票号码。
    * phoneNumber  电话（包括电话、监督电话）。
    * company  单位。
    * taxiNumber  车号。
    * certificateNumber  证号。
    * identificationNumber  识别编号。
    * date  开票日期。
    * boardingTime  上车时间。
    * alightingTime  下车时间。
    * time  时间(起止时间、上下车时间)。
    * unitPrice  单价。
    * distance  总里程。
    * waitingTime  等候时间。
    * fare  金额。
    * fuelOilSurcharge  燃油附加费。
    * callServiceSurcharge  电调费（预约费）。
    * total  实收金额。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $getters = [
            'location' => 'getLocation',
            'code' => 'getCode',
            'number' => 'getNumber',
            'phoneNumber' => 'getPhoneNumber',
            'company' => 'getCompany',
            'taxiNumber' => 'getTaxiNumber',
            'certificateNumber' => 'getCertificateNumber',
            'identificationNumber' => 'getIdentificationNumber',
            'date' => 'getDate',
            'boardingTime' => 'getBoardingTime',
            'alightingTime' => 'getAlightingTime',
            'time' => 'getTime',
            'unitPrice' => 'getUnitPrice',
            'distance' => 'getDistance',
            'waitingTime' => 'getWaitingTime',
            'fare' => 'getFare',
            'fuelOilSurcharge' => 'getFuelOilSurcharge',
            'callServiceSurcharge' => 'getCallServiceSurcharge',
            'total' => 'getTotal',
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['taxiNumber'] = isset($data['taxiNumber']) ? $data['taxiNumber'] : null;
        $this->container['certificateNumber'] = isset($data['certificateNumber']) ? $data['certificateNumber'] : null;
        $this->container['identificationNumber'] = isset($data['identificationNumber']) ? $data['identificationNumber'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['boardingTime'] = isset($data['boardingTime']) ? $data['boardingTime'] : null;
        $this->container['alightingTime'] = isset($data['alightingTime']) ? $data['alightingTime'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['waitingTime'] = isset($data['waitingTime']) ? $data['waitingTime'] : null;
        $this->container['fare'] = isset($data['fare']) ? $data['fare'] : null;
        $this->container['fuelOilSurcharge'] = isset($data['fuelOilSurcharge']) ? $data['fuelOilSurcharge'] : null;
        $this->container['callServiceSurcharge'] = isset($data['callServiceSurcharge']) ? $data['callServiceSurcharge'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets location
    *  归属地区。
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 归属地区。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets code
    *  发票代码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 发票代码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets number
    *  发票号码。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 发票号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets phoneNumber
    *  电话（包括电话、监督电话）。
    *
    * @return string|null
    */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
    * Sets phoneNumber
    *
    * @param string|null $phoneNumber 电话（包括电话、监督电话）。
    *
    * @return $this
    */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
    * Gets company
    *  单位。
    *
    * @return string|null
    */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
    * Sets company
    *
    * @param string|null $company 单位。
    *
    * @return $this
    */
    public function setCompany($company)
    {
        $this->container['company'] = $company;
        return $this;
    }

    /**
    * Gets taxiNumber
    *  车号。
    *
    * @return string|null
    */
    public function getTaxiNumber()
    {
        return $this->container['taxiNumber'];
    }

    /**
    * Sets taxiNumber
    *
    * @param string|null $taxiNumber 车号。
    *
    * @return $this
    */
    public function setTaxiNumber($taxiNumber)
    {
        $this->container['taxiNumber'] = $taxiNumber;
        return $this;
    }

    /**
    * Gets certificateNumber
    *  证号。
    *
    * @return string|null
    */
    public function getCertificateNumber()
    {
        return $this->container['certificateNumber'];
    }

    /**
    * Sets certificateNumber
    *
    * @param string|null $certificateNumber 证号。
    *
    * @return $this
    */
    public function setCertificateNumber($certificateNumber)
    {
        $this->container['certificateNumber'] = $certificateNumber;
        return $this;
    }

    /**
    * Gets identificationNumber
    *  识别编号。
    *
    * @return string|null
    */
    public function getIdentificationNumber()
    {
        return $this->container['identificationNumber'];
    }

    /**
    * Sets identificationNumber
    *
    * @param string|null $identificationNumber 识别编号。
    *
    * @return $this
    */
    public function setIdentificationNumber($identificationNumber)
    {
        $this->container['identificationNumber'] = $identificationNumber;
        return $this;
    }

    /**
    * Gets date
    *  开票日期。
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 开票日期。
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets boardingTime
    *  上车时间。
    *
    * @return string|null
    */
    public function getBoardingTime()
    {
        return $this->container['boardingTime'];
    }

    /**
    * Sets boardingTime
    *
    * @param string|null $boardingTime 上车时间。
    *
    * @return $this
    */
    public function setBoardingTime($boardingTime)
    {
        $this->container['boardingTime'] = $boardingTime;
        return $this;
    }

    /**
    * Gets alightingTime
    *  下车时间。
    *
    * @return string|null
    */
    public function getAlightingTime()
    {
        return $this->container['alightingTime'];
    }

    /**
    * Sets alightingTime
    *
    * @param string|null $alightingTime 下车时间。
    *
    * @return $this
    */
    public function setAlightingTime($alightingTime)
    {
        $this->container['alightingTime'] = $alightingTime;
        return $this;
    }

    /**
    * Gets time
    *  时间(起止时间、上下车时间)。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 时间(起止时间、上下车时间)。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets unitPrice
    *  单价。
    *
    * @return string|null
    */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
    * Sets unitPrice
    *
    * @param string|null $unitPrice 单价。
    *
    * @return $this
    */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
    * Gets distance
    *  总里程。
    *
    * @return string|null
    */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
    * Sets distance
    *
    * @param string|null $distance 总里程。
    *
    * @return $this
    */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;
        return $this;
    }

    /**
    * Gets waitingTime
    *  等候时间。
    *
    * @return string|null
    */
    public function getWaitingTime()
    {
        return $this->container['waitingTime'];
    }

    /**
    * Sets waitingTime
    *
    * @param string|null $waitingTime 等候时间。
    *
    * @return $this
    */
    public function setWaitingTime($waitingTime)
    {
        $this->container['waitingTime'] = $waitingTime;
        return $this;
    }

    /**
    * Gets fare
    *  金额。
    *
    * @return string|null
    */
    public function getFare()
    {
        return $this->container['fare'];
    }

    /**
    * Sets fare
    *
    * @param string|null $fare 金额。
    *
    * @return $this
    */
    public function setFare($fare)
    {
        $this->container['fare'] = $fare;
        return $this;
    }

    /**
    * Gets fuelOilSurcharge
    *  燃油附加费。
    *
    * @return string|null
    */
    public function getFuelOilSurcharge()
    {
        return $this->container['fuelOilSurcharge'];
    }

    /**
    * Sets fuelOilSurcharge
    *
    * @param string|null $fuelOilSurcharge 燃油附加费。
    *
    * @return $this
    */
    public function setFuelOilSurcharge($fuelOilSurcharge)
    {
        $this->container['fuelOilSurcharge'] = $fuelOilSurcharge;
        return $this;
    }

    /**
    * Gets callServiceSurcharge
    *  电调费（预约费）。
    *
    * @return string|null
    */
    public function getCallServiceSurcharge()
    {
        return $this->container['callServiceSurcharge'];
    }

    /**
    * Sets callServiceSurcharge
    *
    * @param string|null $callServiceSurcharge 电调费（预约费）。
    *
    * @return $this
    */
    public function setCallServiceSurcharge($callServiceSurcharge)
    {
        $this->container['callServiceSurcharge'] = $callServiceSurcharge;
        return $this;
    }

    /**
    * Gets total
    *  实收金额。
    *
    * @return string|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param string|null $total 实收金额。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

