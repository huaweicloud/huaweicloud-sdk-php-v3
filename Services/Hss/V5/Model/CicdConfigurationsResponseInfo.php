<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CicdConfigurationsResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CicdConfigurationsResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cicdId  **参数解释** CI/CD标识 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * cicdName  **参数解释** CI/CD名称 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * associatedImagesNum  **参数解释** 关联镜像扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    * associatedConfigNum  **参数解释** 关联配置扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cicdId' => 'string',
            'cicdName' => 'string',
            'associatedImagesNum' => 'int',
            'associatedConfigNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cicdId  **参数解释** CI/CD标识 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * cicdName  **参数解释** CI/CD名称 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * associatedImagesNum  **参数解释** 关联镜像扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    * associatedConfigNum  **参数解释** 关联配置扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cicdId' => null,
        'cicdName' => null,
        'associatedImagesNum' => 'int32',
        'associatedConfigNum' => 'int32'
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
    * cicdId  **参数解释** CI/CD标识 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * cicdName  **参数解释** CI/CD名称 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * associatedImagesNum  **参数解释** 关联镜像扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    * associatedConfigNum  **参数解释** 关联配置扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cicdId' => 'cicd_id',
            'cicdName' => 'cicd_name',
            'associatedImagesNum' => 'associated_images_num',
            'associatedConfigNum' => 'associated_config_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cicdId  **参数解释** CI/CD标识 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * cicdName  **参数解释** CI/CD名称 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * associatedImagesNum  **参数解释** 关联镜像扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    * associatedConfigNum  **参数解释** 关联配置扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'cicdId' => 'setCicdId',
            'cicdName' => 'setCicdName',
            'associatedImagesNum' => 'setAssociatedImagesNum',
            'associatedConfigNum' => 'setAssociatedConfigNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cicdId  **参数解释** CI/CD标识 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * cicdName  **参数解释** CI/CD名称 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    * associatedImagesNum  **参数解释** 关联镜像扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    * associatedConfigNum  **参数解释** 关联配置扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'cicdId' => 'getCicdId',
            'cicdName' => 'getCicdName',
            'associatedImagesNum' => 'getAssociatedImagesNum',
            'associatedConfigNum' => 'getAssociatedConfigNum'
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
        $this->container['cicdId'] = isset($data['cicdId']) ? $data['cicdId'] : null;
        $this->container['cicdName'] = isset($data['cicdName']) ? $data['cicdName'] : null;
        $this->container['associatedImagesNum'] = isset($data['associatedImagesNum']) ? $data['associatedImagesNum'] : null;
        $this->container['associatedConfigNum'] = isset($data['associatedConfigNum']) ? $data['associatedConfigNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cicdId']) && (mb_strlen($this->container['cicdId']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cicdId']) && (mb_strlen($this->container['cicdId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cicdId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cicdName']) && (mb_strlen($this->container['cicdName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedImagesNum']) && ($this->container['associatedImagesNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'associatedImagesNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['associatedImagesNum']) && ($this->container['associatedImagesNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'associatedImagesNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedConfigNum']) && ($this->container['associatedConfigNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'associatedConfigNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['associatedConfigNum']) && ($this->container['associatedConfigNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'associatedConfigNum', must be bigger than or equal to 0.";
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
    * Gets cicdId
    *  **参数解释** CI/CD标识 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getCicdId()
    {
        return $this->container['cicdId'];
    }

    /**
    * Sets cicdId
    *
    * @param string|null $cicdId **参数解释** CI/CD标识 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCicdId($cicdId)
    {
        $this->container['cicdId'] = $cicdId;
        return $this;
    }

    /**
    * Gets cicdName
    *  **参数解释** CI/CD名称 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getCicdName()
    {
        return $this->container['cicdName'];
    }

    /**
    * Sets cicdName
    *
    * @param string|null $cicdName **参数解释** CI/CD名称 **约束限制** 不涉及 **取值范围** 字符长度0-128位  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCicdName($cicdName)
    {
        $this->container['cicdName'] = $cicdName;
        return $this;
    }

    /**
    * Gets associatedImagesNum
    *  **参数解释** 关联镜像扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @return int|null
    */
    public function getAssociatedImagesNum()
    {
        return $this->container['associatedImagesNum'];
    }

    /**
    * Sets associatedImagesNum
    *
    * @param int|null $associatedImagesNum **参数解释** 关联镜像扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setAssociatedImagesNum($associatedImagesNum)
    {
        $this->container['associatedImagesNum'] = $associatedImagesNum;
        return $this;
    }

    /**
    * Gets associatedConfigNum
    *  **参数解释** 关联配置扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @return int|null
    */
    public function getAssociatedConfigNum()
    {
        return $this->container['associatedConfigNum'];
    }

    /**
    * Sets associatedConfigNum
    *
    * @param int|null $associatedConfigNum **参数解释** 关联配置扫描数量 **约束限制** 不涉及 **取值范围** 最小值0，最大值2147483647  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setAssociatedConfigNum($associatedConfigNum)
    {
        $this->container['associatedConfigNum'] = $associatedConfigNum;
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

