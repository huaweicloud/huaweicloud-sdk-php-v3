<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthCodeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthCodeResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  防疫码类别： - 健康码：health_code - 核酸检测记录：pcr_test_record - 通信行程卡：travel_card - 其他：other
    * name  姓名
    * idcardNumber  身份证号码
    * phoneNumber  手机号码
    * province  省份
    * city  城市
    * time  健康码或行程卡的更新时间
    * color  健康码或行程卡颜色。 健康码颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码 - \"gray\"，灰码  行程卡颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码
    * vaccinationStatus  疫苗接种情况，可选值包括：  - 未接种 - 接种中 - 无接种记录 - 已接种1针 - 已接种2针 - 已接种3针 - 已完成新冠疫苗接种
    * testInterval  核酸检测间隔时长，可选值包括： - 24小时内 - 48小时内 - 72小时内 - 5天内 - 7天内 - 7天外
    * pcrTestResult  核酸检测结果，可选值包括： - \"positive\",即阳性 - \"negative\",即阴性 - \"unknown\",未知
    * pcrTestOrganization  核酸检测机构
    * pcrTestTime  核酸检测结果更新时间
    * pcrSamplingTime  核酸检测采样时间
    * reachedCity  行程卡的途径地址
    * confidence  各个字段的置信度。
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'name' => 'string',
            'idcardNumber' => 'string',
            'phoneNumber' => 'string',
            'province' => 'string',
            'city' => 'string',
            'time' => 'string',
            'color' => 'string',
            'vaccinationStatus' => 'string',
            'testInterval' => 'string',
            'pcrTestResult' => 'string',
            'pcrTestOrganization' => 'string',
            'pcrTestTime' => 'string',
            'pcrSamplingTime' => 'string',
            'reachedCity' => 'string[]',
            'confidence' => 'object',
            'wordsBlockCount' => 'int',
            'wordsBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\HealthCodeWordsBlockList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  防疫码类别： - 健康码：health_code - 核酸检测记录：pcr_test_record - 通信行程卡：travel_card - 其他：other
    * name  姓名
    * idcardNumber  身份证号码
    * phoneNumber  手机号码
    * province  省份
    * city  城市
    * time  健康码或行程卡的更新时间
    * color  健康码或行程卡颜色。 健康码颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码 - \"gray\"，灰码  行程卡颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码
    * vaccinationStatus  疫苗接种情况，可选值包括：  - 未接种 - 接种中 - 无接种记录 - 已接种1针 - 已接种2针 - 已接种3针 - 已完成新冠疫苗接种
    * testInterval  核酸检测间隔时长，可选值包括： - 24小时内 - 48小时内 - 72小时内 - 5天内 - 7天内 - 7天外
    * pcrTestResult  核酸检测结果，可选值包括： - \"positive\",即阳性 - \"negative\",即阴性 - \"unknown\",未知
    * pcrTestOrganization  核酸检测机构
    * pcrTestTime  核酸检测结果更新时间
    * pcrSamplingTime  核酸检测采样时间
    * reachedCity  行程卡的途径地址
    * confidence  各个字段的置信度。
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'name' => null,
        'idcardNumber' => null,
        'phoneNumber' => null,
        'province' => null,
        'city' => null,
        'time' => null,
        'color' => null,
        'vaccinationStatus' => null,
        'testInterval' => null,
        'pcrTestResult' => null,
        'pcrTestOrganization' => null,
        'pcrTestTime' => null,
        'pcrSamplingTime' => null,
        'reachedCity' => null,
        'confidence' => null,
        'wordsBlockCount' => 'int32',
        'wordsBlockList' => null
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
    * type  防疫码类别： - 健康码：health_code - 核酸检测记录：pcr_test_record - 通信行程卡：travel_card - 其他：other
    * name  姓名
    * idcardNumber  身份证号码
    * phoneNumber  手机号码
    * province  省份
    * city  城市
    * time  健康码或行程卡的更新时间
    * color  健康码或行程卡颜色。 健康码颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码 - \"gray\"，灰码  行程卡颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码
    * vaccinationStatus  疫苗接种情况，可选值包括：  - 未接种 - 接种中 - 无接种记录 - 已接种1针 - 已接种2针 - 已接种3针 - 已完成新冠疫苗接种
    * testInterval  核酸检测间隔时长，可选值包括： - 24小时内 - 48小时内 - 72小时内 - 5天内 - 7天内 - 7天外
    * pcrTestResult  核酸检测结果，可选值包括： - \"positive\",即阳性 - \"negative\",即阴性 - \"unknown\",未知
    * pcrTestOrganization  核酸检测机构
    * pcrTestTime  核酸检测结果更新时间
    * pcrSamplingTime  核酸检测采样时间
    * reachedCity  行程卡的途径地址
    * confidence  各个字段的置信度。
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'name' => 'name',
            'idcardNumber' => 'idcard_number',
            'phoneNumber' => 'phone_number',
            'province' => 'province',
            'city' => 'city',
            'time' => 'time',
            'color' => 'color',
            'vaccinationStatus' => 'vaccination_status',
            'testInterval' => 'test_interval',
            'pcrTestResult' => 'pcr_test_result',
            'pcrTestOrganization' => 'pcr_test_organization',
            'pcrTestTime' => 'pcr_test_time',
            'pcrSamplingTime' => 'pcr_sampling_time',
            'reachedCity' => 'reached_city',
            'confidence' => 'confidence',
            'wordsBlockCount' => 'words_block_count',
            'wordsBlockList' => 'words_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  防疫码类别： - 健康码：health_code - 核酸检测记录：pcr_test_record - 通信行程卡：travel_card - 其他：other
    * name  姓名
    * idcardNumber  身份证号码
    * phoneNumber  手机号码
    * province  省份
    * city  城市
    * time  健康码或行程卡的更新时间
    * color  健康码或行程卡颜色。 健康码颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码 - \"gray\"，灰码  行程卡颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码
    * vaccinationStatus  疫苗接种情况，可选值包括：  - 未接种 - 接种中 - 无接种记录 - 已接种1针 - 已接种2针 - 已接种3针 - 已完成新冠疫苗接种
    * testInterval  核酸检测间隔时长，可选值包括： - 24小时内 - 48小时内 - 72小时内 - 5天内 - 7天内 - 7天外
    * pcrTestResult  核酸检测结果，可选值包括： - \"positive\",即阳性 - \"negative\",即阴性 - \"unknown\",未知
    * pcrTestOrganization  核酸检测机构
    * pcrTestTime  核酸检测结果更新时间
    * pcrSamplingTime  核酸检测采样时间
    * reachedCity  行程卡的途径地址
    * confidence  各个字段的置信度。
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'name' => 'setName',
            'idcardNumber' => 'setIdcardNumber',
            'phoneNumber' => 'setPhoneNumber',
            'province' => 'setProvince',
            'city' => 'setCity',
            'time' => 'setTime',
            'color' => 'setColor',
            'vaccinationStatus' => 'setVaccinationStatus',
            'testInterval' => 'setTestInterval',
            'pcrTestResult' => 'setPcrTestResult',
            'pcrTestOrganization' => 'setPcrTestOrganization',
            'pcrTestTime' => 'setPcrTestTime',
            'pcrSamplingTime' => 'setPcrSamplingTime',
            'reachedCity' => 'setReachedCity',
            'confidence' => 'setConfidence',
            'wordsBlockCount' => 'setWordsBlockCount',
            'wordsBlockList' => 'setWordsBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  防疫码类别： - 健康码：health_code - 核酸检测记录：pcr_test_record - 通信行程卡：travel_card - 其他：other
    * name  姓名
    * idcardNumber  身份证号码
    * phoneNumber  手机号码
    * province  省份
    * city  城市
    * time  健康码或行程卡的更新时间
    * color  健康码或行程卡颜色。 健康码颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码 - \"gray\"，灰码  行程卡颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码
    * vaccinationStatus  疫苗接种情况，可选值包括：  - 未接种 - 接种中 - 无接种记录 - 已接种1针 - 已接种2针 - 已接种3针 - 已完成新冠疫苗接种
    * testInterval  核酸检测间隔时长，可选值包括： - 24小时内 - 48小时内 - 72小时内 - 5天内 - 7天内 - 7天外
    * pcrTestResult  核酸检测结果，可选值包括： - \"positive\",即阳性 - \"negative\",即阴性 - \"unknown\",未知
    * pcrTestOrganization  核酸检测机构
    * pcrTestTime  核酸检测结果更新时间
    * pcrSamplingTime  核酸检测采样时间
    * reachedCity  行程卡的途径地址
    * confidence  各个字段的置信度。
    * wordsBlockCount  代表检测识别出来的文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'name' => 'getName',
            'idcardNumber' => 'getIdcardNumber',
            'phoneNumber' => 'getPhoneNumber',
            'province' => 'getProvince',
            'city' => 'getCity',
            'time' => 'getTime',
            'color' => 'getColor',
            'vaccinationStatus' => 'getVaccinationStatus',
            'testInterval' => 'getTestInterval',
            'pcrTestResult' => 'getPcrTestResult',
            'pcrTestOrganization' => 'getPcrTestOrganization',
            'pcrTestTime' => 'getPcrTestTime',
            'pcrSamplingTime' => 'getPcrSamplingTime',
            'reachedCity' => 'getReachedCity',
            'confidence' => 'getConfidence',
            'wordsBlockCount' => 'getWordsBlockCount',
            'wordsBlockList' => 'getWordsBlockList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['idcardNumber'] = isset($data['idcardNumber']) ? $data['idcardNumber'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['vaccinationStatus'] = isset($data['vaccinationStatus']) ? $data['vaccinationStatus'] : null;
        $this->container['testInterval'] = isset($data['testInterval']) ? $data['testInterval'] : null;
        $this->container['pcrTestResult'] = isset($data['pcrTestResult']) ? $data['pcrTestResult'] : null;
        $this->container['pcrTestOrganization'] = isset($data['pcrTestOrganization']) ? $data['pcrTestOrganization'] : null;
        $this->container['pcrTestTime'] = isset($data['pcrTestTime']) ? $data['pcrTestTime'] : null;
        $this->container['pcrSamplingTime'] = isset($data['pcrSamplingTime']) ? $data['pcrSamplingTime'] : null;
        $this->container['reachedCity'] = isset($data['reachedCity']) ? $data['reachedCity'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['wordsBlockCount'] = isset($data['wordsBlockCount']) ? $data['wordsBlockCount'] : null;
        $this->container['wordsBlockList'] = isset($data['wordsBlockList']) ? $data['wordsBlockList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['idcardNumber'] === null) {
            $invalidProperties[] = "'idcardNumber' can't be null";
        }
        if ($this->container['phoneNumber'] === null) {
            $invalidProperties[] = "'phoneNumber' can't be null";
        }
        if ($this->container['province'] === null) {
            $invalidProperties[] = "'province' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['vaccinationStatus'] === null) {
            $invalidProperties[] = "'vaccinationStatus' can't be null";
        }
        if ($this->container['testInterval'] === null) {
            $invalidProperties[] = "'testInterval' can't be null";
        }
        if ($this->container['pcrTestResult'] === null) {
            $invalidProperties[] = "'pcrTestResult' can't be null";
        }
        if ($this->container['pcrTestOrganization'] === null) {
            $invalidProperties[] = "'pcrTestOrganization' can't be null";
        }
        if ($this->container['pcrTestTime'] === null) {
            $invalidProperties[] = "'pcrTestTime' can't be null";
        }
        if ($this->container['pcrSamplingTime'] === null) {
            $invalidProperties[] = "'pcrSamplingTime' can't be null";
        }
        if ($this->container['reachedCity'] === null) {
            $invalidProperties[] = "'reachedCity' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
        }
        if ($this->container['wordsBlockCount'] === null) {
            $invalidProperties[] = "'wordsBlockCount' can't be null";
        }
        if ($this->container['wordsBlockList'] === null) {
            $invalidProperties[] = "'wordsBlockList' can't be null";
        }
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
    * Gets type
    *  防疫码类别： - 健康码：health_code - 核酸检测记录：pcr_test_record - 通信行程卡：travel_card - 其他：other
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 防疫码类别： - 健康码：health_code - 核酸检测记录：pcr_test_record - 通信行程卡：travel_card - 其他：other
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  姓名
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 姓名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets idcardNumber
    *  身份证号码
    *
    * @return string
    */
    public function getIdcardNumber()
    {
        return $this->container['idcardNumber'];
    }

    /**
    * Sets idcardNumber
    *
    * @param string $idcardNumber 身份证号码
    *
    * @return $this
    */
    public function setIdcardNumber($idcardNumber)
    {
        $this->container['idcardNumber'] = $idcardNumber;
        return $this;
    }

    /**
    * Gets phoneNumber
    *  手机号码
    *
    * @return string
    */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
    * Sets phoneNumber
    *
    * @param string $phoneNumber 手机号码
    *
    * @return $this
    */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
    * Gets province
    *  省份
    *
    * @return string
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string $province 省份
    *
    * @return $this
    */
    public function setProvince($province)
    {
        $this->container['province'] = $province;
        return $this;
    }

    /**
    * Gets city
    *  城市
    *
    * @return string
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string $city 城市
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets time
    *  健康码或行程卡的更新时间
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time 健康码或行程卡的更新时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets color
    *  健康码或行程卡颜色。 健康码颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码 - \"gray\"，灰码  行程卡颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码
    *
    * @return string
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string $color 健康码或行程卡颜色。 健康码颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码 - \"gray\"，灰码  行程卡颜色可选值包括：  - \"green\"，绿码 - \"yellow\"，黄码 - \"red\"，红码
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets vaccinationStatus
    *  疫苗接种情况，可选值包括：  - 未接种 - 接种中 - 无接种记录 - 已接种1针 - 已接种2针 - 已接种3针 - 已完成新冠疫苗接种
    *
    * @return string
    */
    public function getVaccinationStatus()
    {
        return $this->container['vaccinationStatus'];
    }

    /**
    * Sets vaccinationStatus
    *
    * @param string $vaccinationStatus 疫苗接种情况，可选值包括：  - 未接种 - 接种中 - 无接种记录 - 已接种1针 - 已接种2针 - 已接种3针 - 已完成新冠疫苗接种
    *
    * @return $this
    */
    public function setVaccinationStatus($vaccinationStatus)
    {
        $this->container['vaccinationStatus'] = $vaccinationStatus;
        return $this;
    }

    /**
    * Gets testInterval
    *  核酸检测间隔时长，可选值包括： - 24小时内 - 48小时内 - 72小时内 - 5天内 - 7天内 - 7天外
    *
    * @return string
    */
    public function getTestInterval()
    {
        return $this->container['testInterval'];
    }

    /**
    * Sets testInterval
    *
    * @param string $testInterval 核酸检测间隔时长，可选值包括： - 24小时内 - 48小时内 - 72小时内 - 5天内 - 7天内 - 7天外
    *
    * @return $this
    */
    public function setTestInterval($testInterval)
    {
        $this->container['testInterval'] = $testInterval;
        return $this;
    }

    /**
    * Gets pcrTestResult
    *  核酸检测结果，可选值包括： - \"positive\",即阳性 - \"negative\",即阴性 - \"unknown\",未知
    *
    * @return string
    */
    public function getPcrTestResult()
    {
        return $this->container['pcrTestResult'];
    }

    /**
    * Sets pcrTestResult
    *
    * @param string $pcrTestResult 核酸检测结果，可选值包括： - \"positive\",即阳性 - \"negative\",即阴性 - \"unknown\",未知
    *
    * @return $this
    */
    public function setPcrTestResult($pcrTestResult)
    {
        $this->container['pcrTestResult'] = $pcrTestResult;
        return $this;
    }

    /**
    * Gets pcrTestOrganization
    *  核酸检测机构
    *
    * @return string
    */
    public function getPcrTestOrganization()
    {
        return $this->container['pcrTestOrganization'];
    }

    /**
    * Sets pcrTestOrganization
    *
    * @param string $pcrTestOrganization 核酸检测机构
    *
    * @return $this
    */
    public function setPcrTestOrganization($pcrTestOrganization)
    {
        $this->container['pcrTestOrganization'] = $pcrTestOrganization;
        return $this;
    }

    /**
    * Gets pcrTestTime
    *  核酸检测结果更新时间
    *
    * @return string
    */
    public function getPcrTestTime()
    {
        return $this->container['pcrTestTime'];
    }

    /**
    * Sets pcrTestTime
    *
    * @param string $pcrTestTime 核酸检测结果更新时间
    *
    * @return $this
    */
    public function setPcrTestTime($pcrTestTime)
    {
        $this->container['pcrTestTime'] = $pcrTestTime;
        return $this;
    }

    /**
    * Gets pcrSamplingTime
    *  核酸检测采样时间
    *
    * @return string
    */
    public function getPcrSamplingTime()
    {
        return $this->container['pcrSamplingTime'];
    }

    /**
    * Sets pcrSamplingTime
    *
    * @param string $pcrSamplingTime 核酸检测采样时间
    *
    * @return $this
    */
    public function setPcrSamplingTime($pcrSamplingTime)
    {
        $this->container['pcrSamplingTime'] = $pcrSamplingTime;
        return $this;
    }

    /**
    * Gets reachedCity
    *  行程卡的途径地址
    *
    * @return string[]
    */
    public function getReachedCity()
    {
        return $this->container['reachedCity'];
    }

    /**
    * Sets reachedCity
    *
    * @param string[] $reachedCity 行程卡的途径地址
    *
    * @return $this
    */
    public function setReachedCity($reachedCity)
    {
        $this->container['reachedCity'] = $reachedCity;
        return $this;
    }

    /**
    * Gets confidence
    *  各个字段的置信度。
    *
    * @return object
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object $confidence 各个字段的置信度。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets wordsBlockCount
    *  代表检测识别出来的文字块数目。
    *
    * @return int
    */
    public function getWordsBlockCount()
    {
        return $this->container['wordsBlockCount'];
    }

    /**
    * Sets wordsBlockCount
    *
    * @param int $wordsBlockCount 代表检测识别出来的文字块数目。
    *
    * @return $this
    */
    public function setWordsBlockCount($wordsBlockCount)
    {
        $this->container['wordsBlockCount'] = $wordsBlockCount;
        return $this;
    }

    /**
    * Gets wordsBlockList
    *  识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\HealthCodeWordsBlockList[]
    */
    public function getWordsBlockList()
    {
        return $this->container['wordsBlockList'];
    }

    /**
    * Sets wordsBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\HealthCodeWordsBlockList[] $wordsBlockList 识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @return $this
    */
    public function setWordsBlockList($wordsBlockList)
    {
        $this->container['wordsBlockList'] = $wordsBlockList;
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

