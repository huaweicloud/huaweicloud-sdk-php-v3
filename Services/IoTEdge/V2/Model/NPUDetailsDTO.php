<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NPUDetailsDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NPUDetailsDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  昇腾设备ID
    * npuType  华为AI加速卡型号，如D310推理卡、D310P推理卡、D910训练卡。
    * productName  昇腾设备产品类型
    * aiCore  AI加速卡包含ai核个数
    * health  昇腾设备健康状态
    * errorMsg  昇腾设备故障信息
    * usedInfo  NPU使用信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'npuType' => 'string',
            'productName' => 'string',
            'aiCore' => 'int',
            'health' => 'string',
            'errorMsg' => 'string',
            'usedInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\NpuUsedInfoDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  昇腾设备ID
    * npuType  华为AI加速卡型号，如D310推理卡、D310P推理卡、D910训练卡。
    * productName  昇腾设备产品类型
    * aiCore  AI加速卡包含ai核个数
    * health  昇腾设备健康状态
    * errorMsg  昇腾设备故障信息
    * usedInfo  NPU使用信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'npuType' => null,
        'productName' => null,
        'aiCore' => 'int16',
        'health' => null,
        'errorMsg' => null,
        'usedInfo' => null
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
    * deviceId  昇腾设备ID
    * npuType  华为AI加速卡型号，如D310推理卡、D310P推理卡、D910训练卡。
    * productName  昇腾设备产品类型
    * aiCore  AI加速卡包含ai核个数
    * health  昇腾设备健康状态
    * errorMsg  昇腾设备故障信息
    * usedInfo  NPU使用信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'npuType' => 'npu_type',
            'productName' => 'product_name',
            'aiCore' => 'ai_core',
            'health' => 'health',
            'errorMsg' => 'error_msg',
            'usedInfo' => 'used_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  昇腾设备ID
    * npuType  华为AI加速卡型号，如D310推理卡、D310P推理卡、D910训练卡。
    * productName  昇腾设备产品类型
    * aiCore  AI加速卡包含ai核个数
    * health  昇腾设备健康状态
    * errorMsg  昇腾设备故障信息
    * usedInfo  NPU使用信息
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'npuType' => 'setNpuType',
            'productName' => 'setProductName',
            'aiCore' => 'setAiCore',
            'health' => 'setHealth',
            'errorMsg' => 'setErrorMsg',
            'usedInfo' => 'setUsedInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  昇腾设备ID
    * npuType  华为AI加速卡型号，如D310推理卡、D310P推理卡、D910训练卡。
    * productName  昇腾设备产品类型
    * aiCore  AI加速卡包含ai核个数
    * health  昇腾设备健康状态
    * errorMsg  昇腾设备故障信息
    * usedInfo  NPU使用信息
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'npuType' => 'getNpuType',
            'productName' => 'getProductName',
            'aiCore' => 'getAiCore',
            'health' => 'getHealth',
            'errorMsg' => 'getErrorMsg',
            'usedInfo' => 'getUsedInfo'
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
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['npuType'] = isset($data['npuType']) ? $data['npuType'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['aiCore'] = isset($data['aiCore']) ? $data['aiCore'] : null;
        $this->container['health'] = isset($data['health']) ? $data['health'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['usedInfo'] = isset($data['usedInfo']) ? $data['usedInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['npuType']) && (mb_strlen($this->container['npuType']) > 16)) {
                $invalidProperties[] = "invalid value for 'npuType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['npuType']) && (mb_strlen($this->container['npuType']) < 0)) {
                $invalidProperties[] = "invalid value for 'npuType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['npuType']) && !preg_match("/(D310|D310P|D910)/", $this->container['npuType'])) {
                $invalidProperties[] = "invalid value for 'npuType', must be conform to the pattern /(D310|D310P|D910)/.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 64)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aiCore']) && ($this->container['aiCore'] > 64)) {
                $invalidProperties[] = "invalid value for 'aiCore', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aiCore']) && ($this->container['aiCore'] < 0)) {
                $invalidProperties[] = "invalid value for 'aiCore', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['health']) && (mb_strlen($this->container['health']) > 64)) {
                $invalidProperties[] = "invalid value for 'health', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['health']) && (mb_strlen($this->container['health']) < 0)) {
                $invalidProperties[] = "invalid value for 'health', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 256)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
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
    * Gets deviceId
    *  昇腾设备ID
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 昇腾设备ID
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets npuType
    *  华为AI加速卡型号，如D310推理卡、D310P推理卡、D910训练卡。
    *
    * @return string|null
    */
    public function getNpuType()
    {
        return $this->container['npuType'];
    }

    /**
    * Sets npuType
    *
    * @param string|null $npuType 华为AI加速卡型号，如D310推理卡、D310P推理卡、D910训练卡。
    *
    * @return $this
    */
    public function setNpuType($npuType)
    {
        $this->container['npuType'] = $npuType;
        return $this;
    }

    /**
    * Gets productName
    *  昇腾设备产品类型
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 昇腾设备产品类型
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets aiCore
    *  AI加速卡包含ai核个数
    *
    * @return int|null
    */
    public function getAiCore()
    {
        return $this->container['aiCore'];
    }

    /**
    * Sets aiCore
    *
    * @param int|null $aiCore AI加速卡包含ai核个数
    *
    * @return $this
    */
    public function setAiCore($aiCore)
    {
        $this->container['aiCore'] = $aiCore;
        return $this;
    }

    /**
    * Gets health
    *  昇腾设备健康状态
    *
    * @return string|null
    */
    public function getHealth()
    {
        return $this->container['health'];
    }

    /**
    * Sets health
    *
    * @param string|null $health 昇腾设备健康状态
    *
    * @return $this
    */
    public function setHealth($health)
    {
        $this->container['health'] = $health;
        return $this;
    }

    /**
    * Gets errorMsg
    *  昇腾设备故障信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 昇腾设备故障信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets usedInfo
    *  NPU使用信息
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\NpuUsedInfoDTO[]|null
    */
    public function getUsedInfo()
    {
        return $this->container['usedInfo'];
    }

    /**
    * Sets usedInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\NpuUsedInfoDTO[]|null $usedInfo NPU使用信息
    *
    * @return $this
    */
    public function setUsedInfo($usedInfo)
    {
        $this->container['usedInfo'] = $usedInfo;
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

