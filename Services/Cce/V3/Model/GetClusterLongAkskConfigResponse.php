<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetClusterLongAkskConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetClusterLongAkskConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hasUploadedLongAksk  **参数解释：** 集群是否上传了LongAKSK。 **约束限制：** 不涉及 **取值范围：** - false: 未上传LongAKSK - true: 已上传LongAKSK  **默认取值：** 不涉及
    * enableLongAksk  **参数解释：** 是否启用LongAKSK，启用后在集群kube-system命名空间下会创建名称为paas.longaksk的密钥，关闭则会删除该密钥。 **约束限制：** 不涉及 **取值范围：** - false: 禁用LongAKSK - true: 启用LongAKSK  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hasUploadedLongAksk' => 'bool',
            'enableLongAksk' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hasUploadedLongAksk  **参数解释：** 集群是否上传了LongAKSK。 **约束限制：** 不涉及 **取值范围：** - false: 未上传LongAKSK - true: 已上传LongAKSK  **默认取值：** 不涉及
    * enableLongAksk  **参数解释：** 是否启用LongAKSK，启用后在集群kube-system命名空间下会创建名称为paas.longaksk的密钥，关闭则会删除该密钥。 **约束限制：** 不涉及 **取值范围：** - false: 禁用LongAKSK - true: 启用LongAKSK  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hasUploadedLongAksk' => null,
        'enableLongAksk' => null
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
    * hasUploadedLongAksk  **参数解释：** 集群是否上传了LongAKSK。 **约束限制：** 不涉及 **取值范围：** - false: 未上传LongAKSK - true: 已上传LongAKSK  **默认取值：** 不涉及
    * enableLongAksk  **参数解释：** 是否启用LongAKSK，启用后在集群kube-system命名空间下会创建名称为paas.longaksk的密钥，关闭则会删除该密钥。 **约束限制：** 不涉及 **取值范围：** - false: 禁用LongAKSK - true: 启用LongAKSK  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hasUploadedLongAksk' => 'hasUploadedLongAKSK',
            'enableLongAksk' => 'enableLongAKSK'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hasUploadedLongAksk  **参数解释：** 集群是否上传了LongAKSK。 **约束限制：** 不涉及 **取值范围：** - false: 未上传LongAKSK - true: 已上传LongAKSK  **默认取值：** 不涉及
    * enableLongAksk  **参数解释：** 是否启用LongAKSK，启用后在集群kube-system命名空间下会创建名称为paas.longaksk的密钥，关闭则会删除该密钥。 **约束限制：** 不涉及 **取值范围：** - false: 禁用LongAKSK - true: 启用LongAKSK  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hasUploadedLongAksk' => 'setHasUploadedLongAksk',
            'enableLongAksk' => 'setEnableLongAksk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hasUploadedLongAksk  **参数解释：** 集群是否上传了LongAKSK。 **约束限制：** 不涉及 **取值范围：** - false: 未上传LongAKSK - true: 已上传LongAKSK  **默认取值：** 不涉及
    * enableLongAksk  **参数解释：** 是否启用LongAKSK，启用后在集群kube-system命名空间下会创建名称为paas.longaksk的密钥，关闭则会删除该密钥。 **约束限制：** 不涉及 **取值范围：** - false: 禁用LongAKSK - true: 启用LongAKSK  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hasUploadedLongAksk' => 'getHasUploadedLongAksk',
            'enableLongAksk' => 'getEnableLongAksk'
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
        $this->container['hasUploadedLongAksk'] = isset($data['hasUploadedLongAksk']) ? $data['hasUploadedLongAksk'] : null;
        $this->container['enableLongAksk'] = isset($data['enableLongAksk']) ? $data['enableLongAksk'] : null;
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
    * Gets hasUploadedLongAksk
    *  **参数解释：** 集群是否上传了LongAKSK。 **约束限制：** 不涉及 **取值范围：** - false: 未上传LongAKSK - true: 已上传LongAKSK  **默认取值：** 不涉及
    *
    * @return bool|null
    */
    public function getHasUploadedLongAksk()
    {
        return $this->container['hasUploadedLongAksk'];
    }

    /**
    * Sets hasUploadedLongAksk
    *
    * @param bool|null $hasUploadedLongAksk **参数解释：** 集群是否上传了LongAKSK。 **约束限制：** 不涉及 **取值范围：** - false: 未上传LongAKSK - true: 已上传LongAKSK  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHasUploadedLongAksk($hasUploadedLongAksk)
    {
        $this->container['hasUploadedLongAksk'] = $hasUploadedLongAksk;
        return $this;
    }

    /**
    * Gets enableLongAksk
    *  **参数解释：** 是否启用LongAKSK，启用后在集群kube-system命名空间下会创建名称为paas.longaksk的密钥，关闭则会删除该密钥。 **约束限制：** 不涉及 **取值范围：** - false: 禁用LongAKSK - true: 启用LongAKSK  **默认取值：** 不涉及
    *
    * @return bool|null
    */
    public function getEnableLongAksk()
    {
        return $this->container['enableLongAksk'];
    }

    /**
    * Sets enableLongAksk
    *
    * @param bool|null $enableLongAksk **参数解释：** 是否启用LongAKSK，启用后在集群kube-system命名空间下会创建名称为paas.longaksk的密钥，关闭则会删除该密钥。 **约束限制：** 不涉及 **取值范围：** - false: 禁用LongAKSK - true: 启用LongAKSK  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEnableLongAksk($enableLongAksk)
    {
        $this->container['enableLongAksk'] = $enableLongAksk;
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

