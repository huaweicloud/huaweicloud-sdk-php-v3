<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecretRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecretRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID。更新凭据的主密钥后，仅新创建的凭据版本使用更新后的主密钥ID加密，之前的凭据版本依旧使用之前的主密钥ID解密。
    * description  凭据的描述信息。 约束：2048字节。
    * autoRotation  自动轮转  取值：true 开启 false 关
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kmsKeyId' => 'string',
            'description' => 'string',
            'autoRotation' => 'bool',
            'rotationPeriod' => 'string',
            'eventSubscriptions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID。更新凭据的主密钥后，仅新创建的凭据版本使用更新后的主密钥ID加密，之前的凭据版本依旧使用之前的主密钥ID解密。
    * description  凭据的描述信息。 约束：2048字节。
    * autoRotation  自动轮转  取值：true 开启 false 关
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kmsKeyId' => null,
        'description' => null,
        'autoRotation' => null,
        'rotationPeriod' => null,
        'eventSubscriptions' => null
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
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID。更新凭据的主密钥后，仅新创建的凭据版本使用更新后的主密钥ID加密，之前的凭据版本依旧使用之前的主密钥ID解密。
    * description  凭据的描述信息。 约束：2048字节。
    * autoRotation  自动轮转  取值：true 开启 false 关
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kmsKeyId' => 'kms_key_id',
            'description' => 'description',
            'autoRotation' => 'auto_rotation',
            'rotationPeriod' => 'rotation_period',
            'eventSubscriptions' => 'event_subscriptions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID。更新凭据的主密钥后，仅新创建的凭据版本使用更新后的主密钥ID加密，之前的凭据版本依旧使用之前的主密钥ID解密。
    * description  凭据的描述信息。 约束：2048字节。
    * autoRotation  自动轮转  取值：true 开启 false 关
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @var string[]
    */
    protected static $setters = [
            'kmsKeyId' => 'setKmsKeyId',
            'description' => 'setDescription',
            'autoRotation' => 'setAutoRotation',
            'rotationPeriod' => 'setRotationPeriod',
            'eventSubscriptions' => 'setEventSubscriptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID。更新凭据的主密钥后，仅新创建的凭据版本使用更新后的主密钥ID加密，之前的凭据版本依旧使用之前的主密钥ID解密。
    * description  凭据的描述信息。 约束：2048字节。
    * autoRotation  自动轮转  取值：true 开启 false 关
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @var string[]
    */
    protected static $getters = [
            'kmsKeyId' => 'getKmsKeyId',
            'description' => 'getDescription',
            'autoRotation' => 'getAutoRotation',
            'rotationPeriod' => 'getRotationPeriod',
            'eventSubscriptions' => 'getEventSubscriptions'
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
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['autoRotation'] = isset($data['autoRotation']) ? $data['autoRotation'] : null;
        $this->container['rotationPeriod'] = isset($data['rotationPeriod']) ? $data['rotationPeriod'] : null;
        $this->container['eventSubscriptions'] = isset($data['eventSubscriptions']) ? $data['eventSubscriptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['kmsKeyId']) && (mb_strlen($this->container['kmsKeyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'kmsKeyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['kmsKeyId']) && (mb_strlen($this->container['kmsKeyId']) < 2)) {
                $invalidProperties[] = "invalid value for 'kmsKeyId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rotationPeriod']) && (mb_strlen($this->container['rotationPeriod']) > 50)) {
                $invalidProperties[] = "invalid value for 'rotationPeriod', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['rotationPeriod']) && (mb_strlen($this->container['rotationPeriod']) < 0)) {
                $invalidProperties[] = "invalid value for 'rotationPeriod', the character length must be bigger than or equal to 0.";
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
    * Gets kmsKeyId
    *  用于加密保护凭据值的KMS主密钥ID。更新凭据的主密钥后，仅新创建的凭据版本使用更新后的主密钥ID加密，之前的凭据版本依旧使用之前的主密钥ID解密。
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId 用于加密保护凭据值的KMS主密钥ID。更新凭据的主密钥后，仅新创建的凭据版本使用更新后的主密钥ID加密，之前的凭据版本依旧使用之前的主密钥ID解密。
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
        return $this;
    }

    /**
    * Gets description
    *  凭据的描述信息。 约束：2048字节。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 凭据的描述信息。 约束：2048字节。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets autoRotation
    *  自动轮转  取值：true 开启 false 关
    *
    * @return bool|null
    */
    public function getAutoRotation()
    {
        return $this->container['autoRotation'];
    }

    /**
    * Sets autoRotation
    *
    * @param bool|null $autoRotation 自动轮转  取值：true 开启 false 关
    *
    * @return $this
    */
    public function setAutoRotation($autoRotation)
    {
        $this->container['autoRotation'] = $autoRotation;
        return $this;
    }

    /**
    * Gets rotationPeriod
    *  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    *
    * @return string|null
    */
    public function getRotationPeriod()
    {
        return $this->container['rotationPeriod'];
    }

    /**
    * Sets rotationPeriod
    *
    * @param string|null $rotationPeriod 轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    *
    * @return $this
    */
    public function setRotationPeriod($rotationPeriod)
    {
        $this->container['rotationPeriod'] = $rotationPeriod;
        return $this;
    }

    /**
    * Gets eventSubscriptions
    *  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @return string[]|null
    */
    public function getEventSubscriptions()
    {
        return $this->container['eventSubscriptions'];
    }

    /**
    * Sets eventSubscriptions
    *
    * @param string[]|null $eventSubscriptions 凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @return $this
    */
    public function setEventSubscriptions($eventSubscriptions)
    {
        $this->container['eventSubscriptions'] = $eventSubscriptions;
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

