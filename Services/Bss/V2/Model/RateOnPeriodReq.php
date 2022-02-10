<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RateOnPeriodReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RateOnPeriodReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID。  说明： 获取方法： 步骤1：调用IAM获取委托Token接口，获取客户Token。 步骤2：参见如何将合作伙伴Token置换为客户Token的步骤2，获取项目ID。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'productInfos' => '\HuaweiCloud\SDK\Bss\V2\Model\PeriodProductInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID。  说明： 获取方法： 步骤1：调用IAM获取委托Token接口，获取客户Token。 步骤2：参见如何将合作伙伴Token置换为客户Token的步骤2，获取项目ID。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'productInfos' => null
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
    * projectId  项目ID。  说明： 获取方法： 步骤1：调用IAM获取委托Token接口，获取客户Token。 步骤2：参见如何将合作伙伴Token置换为客户Token的步骤2，获取项目ID。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'productInfos' => 'product_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID。  说明： 获取方法： 步骤1：调用IAM获取委托Token接口，获取客户Token。 步骤2：参见如何将合作伙伴Token置换为客户Token的步骤2，获取项目ID。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'productInfos' => 'setProductInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID。  说明： 获取方法： 步骤1：调用IAM获取委托Token接口，获取客户Token。 步骤2：参见如何将合作伙伴Token置换为客户Token的步骤2，获取项目ID。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'productInfos' => 'getProductInfos'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['productInfos'] = isset($data['productInfos']) ? $data['productInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['productInfos'] === null) {
            $invalidProperties[] = "'productInfos' can't be null";
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
    * Gets projectId
    *  项目ID。  说明： 获取方法： 步骤1：调用IAM获取委托Token接口，获取客户Token。 步骤2：参见如何将合作伙伴Token置换为客户Token的步骤2，获取项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID。  说明： 获取方法： 步骤1：调用IAM获取委托Token接口，获取客户Token。 步骤2：参见如何将合作伙伴Token置换为客户Token的步骤2，获取项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets productInfos
    *  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\PeriodProductInfo[]
    */
    public function getProductInfos()
    {
        return $this->container['productInfos'];
    }

    /**
    * Sets productInfos
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\PeriodProductInfo[] $productInfos 产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @return $this
    */
    public function setProductInfos($productInfos)
    {
        $this->container['productInfos'] = $productInfos;
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

