<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchKmsTdeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchKmsTdeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kmsTdeKeyId  **参数解释**: kms主密钥ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsProjectName  **参数解释**: GaussDB使用透明加密的KMS主密钥ID所在资源空间名称。 获取方法请参见[获取项目名称](https://support.huaweicloud.com/api-gaussdb/gaussdb_api_196.html)。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsTdeStatus  **参数解释**: 需要切换的状态：on表示开启。 **约束限制**: 不涉及。 **取值范围**: on: 开启。 **默认取值**: on
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kmsTdeKeyId' => 'string',
            'kmsProjectName' => 'string',
            'kmsTdeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kmsTdeKeyId  **参数解释**: kms主密钥ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsProjectName  **参数解释**: GaussDB使用透明加密的KMS主密钥ID所在资源空间名称。 获取方法请参见[获取项目名称](https://support.huaweicloud.com/api-gaussdb/gaussdb_api_196.html)。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsTdeStatus  **参数解释**: 需要切换的状态：on表示开启。 **约束限制**: 不涉及。 **取值范围**: on: 开启。 **默认取值**: on
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kmsTdeKeyId' => null,
        'kmsProjectName' => null,
        'kmsTdeStatus' => null
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
    * kmsTdeKeyId  **参数解释**: kms主密钥ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsProjectName  **参数解释**: GaussDB使用透明加密的KMS主密钥ID所在资源空间名称。 获取方法请参见[获取项目名称](https://support.huaweicloud.com/api-gaussdb/gaussdb_api_196.html)。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsTdeStatus  **参数解释**: 需要切换的状态：on表示开启。 **约束限制**: 不涉及。 **取值范围**: on: 开启。 **默认取值**: on
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kmsTdeKeyId' => 'kms_tde_key_id',
            'kmsProjectName' => 'kms_project_name',
            'kmsTdeStatus' => 'kms_tde_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kmsTdeKeyId  **参数解释**: kms主密钥ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsProjectName  **参数解释**: GaussDB使用透明加密的KMS主密钥ID所在资源空间名称。 获取方法请参见[获取项目名称](https://support.huaweicloud.com/api-gaussdb/gaussdb_api_196.html)。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsTdeStatus  **参数解释**: 需要切换的状态：on表示开启。 **约束限制**: 不涉及。 **取值范围**: on: 开启。 **默认取值**: on
    *
    * @var string[]
    */
    protected static $setters = [
            'kmsTdeKeyId' => 'setKmsTdeKeyId',
            'kmsProjectName' => 'setKmsProjectName',
            'kmsTdeStatus' => 'setKmsTdeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kmsTdeKeyId  **参数解释**: kms主密钥ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsProjectName  **参数解释**: GaussDB使用透明加密的KMS主密钥ID所在资源空间名称。 获取方法请参见[获取项目名称](https://support.huaweicloud.com/api-gaussdb/gaussdb_api_196.html)。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * kmsTdeStatus  **参数解释**: 需要切换的状态：on表示开启。 **约束限制**: 不涉及。 **取值范围**: on: 开启。 **默认取值**: on
    *
    * @var string[]
    */
    protected static $getters = [
            'kmsTdeKeyId' => 'getKmsTdeKeyId',
            'kmsProjectName' => 'getKmsProjectName',
            'kmsTdeStatus' => 'getKmsTdeStatus'
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
    const KMS_TDE_STATUS_ON = 'on';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKmsTdeStatusAllowableValues()
    {
        return [
            self::KMS_TDE_STATUS_ON,
        ];
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
        $this->container['kmsTdeKeyId'] = isset($data['kmsTdeKeyId']) ? $data['kmsTdeKeyId'] : null;
        $this->container['kmsProjectName'] = isset($data['kmsProjectName']) ? $data['kmsProjectName'] : null;
        $this->container['kmsTdeStatus'] = isset($data['kmsTdeStatus']) ? $data['kmsTdeStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['kmsTdeKeyId'] === null) {
            $invalidProperties[] = "'kmsTdeKeyId' can't be null";
        }
        if ($this->container['kmsProjectName'] === null) {
            $invalidProperties[] = "'kmsProjectName' can't be null";
        }
        if ($this->container['kmsTdeStatus'] === null) {
            $invalidProperties[] = "'kmsTdeStatus' can't be null";
        }
            $allowedValues = $this->getKmsTdeStatusAllowableValues();
                if (!is_null($this->container['kmsTdeStatus']) && !in_array($this->container['kmsTdeStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'kmsTdeStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets kmsTdeKeyId
    *  **参数解释**: kms主密钥ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getKmsTdeKeyId()
    {
        return $this->container['kmsTdeKeyId'];
    }

    /**
    * Sets kmsTdeKeyId
    *
    * @param string $kmsTdeKeyId **参数解释**: kms主密钥ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setKmsTdeKeyId($kmsTdeKeyId)
    {
        $this->container['kmsTdeKeyId'] = $kmsTdeKeyId;
        return $this;
    }

    /**
    * Gets kmsProjectName
    *  **参数解释**: GaussDB使用透明加密的KMS主密钥ID所在资源空间名称。 获取方法请参见[获取项目名称](https://support.huaweicloud.com/api-gaussdb/gaussdb_api_196.html)。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getKmsProjectName()
    {
        return $this->container['kmsProjectName'];
    }

    /**
    * Sets kmsProjectName
    *
    * @param string $kmsProjectName **参数解释**: GaussDB使用透明加密的KMS主密钥ID所在资源空间名称。 获取方法请参见[获取项目名称](https://support.huaweicloud.com/api-gaussdb/gaussdb_api_196.html)。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setKmsProjectName($kmsProjectName)
    {
        $this->container['kmsProjectName'] = $kmsProjectName;
        return $this;
    }

    /**
    * Gets kmsTdeStatus
    *  **参数解释**: 需要切换的状态：on表示开启。 **约束限制**: 不涉及。 **取值范围**: on: 开启。 **默认取值**: on
    *
    * @return string
    */
    public function getKmsTdeStatus()
    {
        return $this->container['kmsTdeStatus'];
    }

    /**
    * Sets kmsTdeStatus
    *
    * @param string $kmsTdeStatus **参数解释**: 需要切换的状态：on表示开启。 **约束限制**: 不涉及。 **取值范围**: on: 开启。 **默认取值**: on
    *
    * @return $this
    */
    public function setKmsTdeStatus($kmsTdeStatus)
    {
        $this->container['kmsTdeStatus'] = $kmsTdeStatus;
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

