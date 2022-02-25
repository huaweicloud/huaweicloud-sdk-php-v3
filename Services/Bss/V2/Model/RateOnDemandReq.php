<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RateOnDemandReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RateOnDemandReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID。  说明： 使用客户Token，可以调用通过assume_role方式获取用户token接口获取“regionId”的取值对应的“project id”。具体请参见如何将合作伙伴Token置换为客户Token的步骤2。IAM子用户调用此接口，需要IAM主账号授权，具体请参考创建用户组并授权。
    * inquiryPrecision  查询价格结果的精度模式。 0：询价结果默认精度截取，即最长保留到元后6位小数点，如0.000001元1：询价结果保留10位精度，即最长保留到元后10位小数点，如1.0000000001元  说明： 如果询价结果只到元后2位或者3位，那么价格也只到元后2位或者3位，不管传0或者传1都一样，只有询价结果到了小数点后面6位以上，传0和传1才有区别。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'inquiryPrecision' => 'int',
            'productInfos' => '\HuaweiCloud\SDK\Bss\V2\Model\DemandProductInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID。  说明： 使用客户Token，可以调用通过assume_role方式获取用户token接口获取“regionId”的取值对应的“project id”。具体请参见如何将合作伙伴Token置换为客户Token的步骤2。IAM子用户调用此接口，需要IAM主账号授权，具体请参考创建用户组并授权。
    * inquiryPrecision  查询价格结果的精度模式。 0：询价结果默认精度截取，即最长保留到元后6位小数点，如0.000001元1：询价结果保留10位精度，即最长保留到元后10位小数点，如1.0000000001元  说明： 如果询价结果只到元后2位或者3位，那么价格也只到元后2位或者3位，不管传0或者传1都一样，只有询价结果到了小数点后面6位以上，传0和传1才有区别。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'inquiryPrecision' => 'int32',
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
    * projectId  项目ID。  说明： 使用客户Token，可以调用通过assume_role方式获取用户token接口获取“regionId”的取值对应的“project id”。具体请参见如何将合作伙伴Token置换为客户Token的步骤2。IAM子用户调用此接口，需要IAM主账号授权，具体请参考创建用户组并授权。
    * inquiryPrecision  查询价格结果的精度模式。 0：询价结果默认精度截取，即最长保留到元后6位小数点，如0.000001元1：询价结果保留10位精度，即最长保留到元后10位小数点，如1.0000000001元  说明： 如果询价结果只到元后2位或者3位，那么价格也只到元后2位或者3位，不管传0或者传1都一样，只有询价结果到了小数点后面6位以上，传0和传1才有区别。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'inquiryPrecision' => 'inquiry_precision',
            'productInfos' => 'product_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID。  说明： 使用客户Token，可以调用通过assume_role方式获取用户token接口获取“regionId”的取值对应的“project id”。具体请参见如何将合作伙伴Token置换为客户Token的步骤2。IAM子用户调用此接口，需要IAM主账号授权，具体请参考创建用户组并授权。
    * inquiryPrecision  查询价格结果的精度模式。 0：询价结果默认精度截取，即最长保留到元后6位小数点，如0.000001元1：询价结果保留10位精度，即最长保留到元后10位小数点，如1.0000000001元  说明： 如果询价结果只到元后2位或者3位，那么价格也只到元后2位或者3位，不管传0或者传1都一样，只有询价结果到了小数点后面6位以上，传0和传1才有区别。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'inquiryPrecision' => 'setInquiryPrecision',
            'productInfos' => 'setProductInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID。  说明： 使用客户Token，可以调用通过assume_role方式获取用户token接口获取“regionId”的取值对应的“project id”。具体请参见如何将合作伙伴Token置换为客户Token的步骤2。IAM子用户调用此接口，需要IAM主账号授权，具体请参考创建用户组并授权。
    * inquiryPrecision  查询价格结果的精度模式。 0：询价结果默认精度截取，即最长保留到元后6位小数点，如0.000001元1：询价结果保留10位精度，即最长保留到元后10位小数点，如1.0000000001元  说明： 如果询价结果只到元后2位或者3位，那么价格也只到元后2位或者3位，不管传0或者传1都一样，只有询价结果到了小数点后面6位以上，传0和传1才有区别。
    * productInfos  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'inquiryPrecision' => 'getInquiryPrecision',
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
        $this->container['inquiryPrecision'] = isset($data['inquiryPrecision']) ? $data['inquiryPrecision'] : 0;
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
            if (!is_null($this->container['inquiryPrecision']) && ($this->container['inquiryPrecision'] > 1)) {
                $invalidProperties[] = "invalid value for 'inquiryPrecision', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['inquiryPrecision']) && ($this->container['inquiryPrecision'] < 0)) {
                $invalidProperties[] = "invalid value for 'inquiryPrecision', must be bigger than or equal to 0.";
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
    *  项目ID。  说明： 使用客户Token，可以调用通过assume_role方式获取用户token接口获取“regionId”的取值对应的“project id”。具体请参见如何将合作伙伴Token置换为客户Token的步骤2。IAM子用户调用此接口，需要IAM主账号授权，具体请参考创建用户组并授权。
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
    * @param string $projectId 项目ID。  说明： 使用客户Token，可以调用通过assume_role方式获取用户token接口获取“regionId”的取值对应的“project id”。具体请参见如何将合作伙伴Token置换为客户Token的步骤2。IAM子用户调用此接口，需要IAM主账号授权，具体请参考创建用户组并授权。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets inquiryPrecision
    *  查询价格结果的精度模式。 0：询价结果默认精度截取，即最长保留到元后6位小数点，如0.000001元1：询价结果保留10位精度，即最长保留到元后10位小数点，如1.0000000001元  说明： 如果询价结果只到元后2位或者3位，那么价格也只到元后2位或者3位，不管传0或者传1都一样，只有询价结果到了小数点后面6位以上，传0和传1才有区别。
    *
    * @return int|null
    */
    public function getInquiryPrecision()
    {
        return $this->container['inquiryPrecision'];
    }

    /**
    * Sets inquiryPrecision
    *
    * @param int|null $inquiryPrecision 查询价格结果的精度模式。 0：询价结果默认精度截取，即最长保留到元后6位小数点，如0.000001元1：询价结果保留10位精度，即最长保留到元后10位小数点，如1.0000000001元  说明： 如果询价结果只到元后2位或者3位，那么价格也只到元后2位或者3位，不管传0或者传1都一样，只有询价结果到了小数点后面6位以上，传0和传1才有区别。
    *
    * @return $this
    */
    public function setInquiryPrecision($inquiryPrecision)
    {
        $this->container['inquiryPrecision'] = $inquiryPrecision;
        return $this;
    }

    /**
    * Gets productInfos
    *  产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\DemandProductInfo[]
    */
    public function getProductInfos()
    {
        return $this->container['productInfos'];
    }

    /**
    * Sets productInfos
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\DemandProductInfo[] $productInfos 产品信息列表，询价时要询价产品的信息的列表，具体参见表1。
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

