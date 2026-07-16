<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTenantRepoEncryptionSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTenantRepoEncryptionSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * encryptionType  **参数解释：** 加密类型。 **取值范围：** KMS表示开启KMS加密，normal或者null表示未开启KMS加密。
    * defaultEncryptionEnabled  **参数解释：** 是否开启租户下默认加密设置。
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    * region  **参数解释：** 当前region 。 **取值范围：** 字符串长度不少于1，不超过1000。
    * regionType  **参数解释：** region类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'encryptionType' => 'string',
            'defaultEncryptionEnabled' => 'bool',
            'cmkKeyName' => 'string',
            'cmkKeyId' => 'string',
            'id' => 'int',
            'keyState' => 'string',
            'region' => 'string',
            'regionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * encryptionType  **参数解释：** 加密类型。 **取值范围：** KMS表示开启KMS加密，normal或者null表示未开启KMS加密。
    * defaultEncryptionEnabled  **参数解释：** 是否开启租户下默认加密设置。
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    * region  **参数解释：** 当前region 。 **取值范围：** 字符串长度不少于1，不超过1000。
    * regionType  **参数解释：** region类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'encryptionType' => null,
        'defaultEncryptionEnabled' => null,
        'cmkKeyName' => null,
        'cmkKeyId' => null,
        'id' => 'int32',
        'keyState' => null,
        'region' => null,
        'regionType' => null
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
    * tenantId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * encryptionType  **参数解释：** 加密类型。 **取值范围：** KMS表示开启KMS加密，normal或者null表示未开启KMS加密。
    * defaultEncryptionEnabled  **参数解释：** 是否开启租户下默认加密设置。
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    * region  **参数解释：** 当前region 。 **取值范围：** 字符串长度不少于1，不超过1000。
    * regionType  **参数解释：** region类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'encryptionType' => 'encryption_type',
            'defaultEncryptionEnabled' => 'default_encryption_enabled',
            'cmkKeyName' => 'cmk_key_name',
            'cmkKeyId' => 'cmk_key_id',
            'id' => 'id',
            'keyState' => 'key_state',
            'region' => 'region',
            'regionType' => 'region_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * encryptionType  **参数解释：** 加密类型。 **取值范围：** KMS表示开启KMS加密，normal或者null表示未开启KMS加密。
    * defaultEncryptionEnabled  **参数解释：** 是否开启租户下默认加密设置。
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    * region  **参数解释：** 当前region 。 **取值范围：** 字符串长度不少于1，不超过1000。
    * regionType  **参数解释：** region类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'encryptionType' => 'setEncryptionType',
            'defaultEncryptionEnabled' => 'setDefaultEncryptionEnabled',
            'cmkKeyName' => 'setCmkKeyName',
            'cmkKeyId' => 'setCmkKeyId',
            'id' => 'setId',
            'keyState' => 'setKeyState',
            'region' => 'setRegion',
            'regionType' => 'setRegionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * encryptionType  **参数解释：** 加密类型。 **取值范围：** KMS表示开启KMS加密，normal或者null表示未开启KMS加密。
    * defaultEncryptionEnabled  **参数解释：** 是否开启租户下默认加密设置。
    * cmkKeyName  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * cmkKeyId  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * id  **参数解释：** 记录id。
    * keyState  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    * region  **参数解释：** 当前region 。 **取值范围：** 字符串长度不少于1，不超过1000。
    * regionType  **参数解释：** region类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'encryptionType' => 'getEncryptionType',
            'defaultEncryptionEnabled' => 'getDefaultEncryptionEnabled',
            'cmkKeyName' => 'getCmkKeyName',
            'cmkKeyId' => 'getCmkKeyId',
            'id' => 'getId',
            'keyState' => 'getKeyState',
            'region' => 'getRegion',
            'regionType' => 'getRegionType'
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
    const KEY_STATE__1 = '1';
    const KEY_STATE__2 = '2';
    const KEY_STATE__3 = '3';
    const KEY_STATE__4 = '4';
    const KEY_STATE__5 = '5';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyStateAllowableValues()
    {
        return [
            self::KEY_STATE__1,
            self::KEY_STATE__2,
            self::KEY_STATE__3,
            self::KEY_STATE__4,
            self::KEY_STATE__5,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['encryptionType'] = isset($data['encryptionType']) ? $data['encryptionType'] : null;
        $this->container['defaultEncryptionEnabled'] = isset($data['defaultEncryptionEnabled']) ? $data['defaultEncryptionEnabled'] : null;
        $this->container['cmkKeyName'] = isset($data['cmkKeyName']) ? $data['cmkKeyName'] : null;
        $this->container['cmkKeyId'] = isset($data['cmkKeyId']) ? $data['cmkKeyId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['keyState'] = isset($data['keyState']) ? $data['keyState'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionType'] = isset($data['regionType']) ? $data['regionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['encryptionType']) && (mb_strlen($this->container['encryptionType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'encryptionType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['encryptionType']) && (mb_strlen($this->container['encryptionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'encryptionType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cmkKeyName']) && (mb_strlen($this->container['cmkKeyName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'cmkKeyName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cmkKeyName']) && (mb_strlen($this->container['cmkKeyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmkKeyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cmkKeyId']) && (mb_strlen($this->container['cmkKeyId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'cmkKeyId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['cmkKeyId']) && (mb_strlen($this->container['cmkKeyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmkKeyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getKeyStateAllowableValues();
                if (!is_null($this->container['keyState']) && !in_array($this->container['keyState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keyState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 1000)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionType']) && (mb_strlen($this->container['regionType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'regionType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['regionType']) && (mb_strlen($this->container['regionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionType', the character length must be bigger than or equal to 1.";
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
    * Gets tenantId
    *  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets encryptionType
    *  **参数解释：** 加密类型。 **取值范围：** KMS表示开启KMS加密，normal或者null表示未开启KMS加密。
    *
    * @return string|null
    */
    public function getEncryptionType()
    {
        return $this->container['encryptionType'];
    }

    /**
    * Sets encryptionType
    *
    * @param string|null $encryptionType **参数解释：** 加密类型。 **取值范围：** KMS表示开启KMS加密，normal或者null表示未开启KMS加密。
    *
    * @return $this
    */
    public function setEncryptionType($encryptionType)
    {
        $this->container['encryptionType'] = $encryptionType;
        return $this;
    }

    /**
    * Gets defaultEncryptionEnabled
    *  **参数解释：** 是否开启租户下默认加密设置。
    *
    * @return bool|null
    */
    public function getDefaultEncryptionEnabled()
    {
        return $this->container['defaultEncryptionEnabled'];
    }

    /**
    * Sets defaultEncryptionEnabled
    *
    * @param bool|null $defaultEncryptionEnabled **参数解释：** 是否开启租户下默认加密设置。
    *
    * @return $this
    */
    public function setDefaultEncryptionEnabled($defaultEncryptionEnabled)
    {
        $this->container['defaultEncryptionEnabled'] = $defaultEncryptionEnabled;
        return $this;
    }

    /**
    * Gets cmkKeyName
    *  **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCmkKeyName()
    {
        return $this->container['cmkKeyName'];
    }

    /**
    * Sets cmkKeyName
    *
    * @param string|null $cmkKeyName **参数解释：** 加密主密钥的名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCmkKeyName($cmkKeyName)
    {
        $this->container['cmkKeyName'] = $cmkKeyName;
        return $this;
    }

    /**
    * Gets cmkKeyId
    *  **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCmkKeyId()
    {
        return $this->container['cmkKeyId'];
    }

    /**
    * Sets cmkKeyId
    *
    * @param string|null $cmkKeyId **参数解释：** 加密主密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCmkKeyId($cmkKeyId)
    {
        $this->container['cmkKeyId'] = $cmkKeyId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 记录id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 记录id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets keyState
    *  **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @return string|null
    */
    public function getKeyState()
    {
        return $this->container['keyState'];
    }

    /**
    * Sets keyState
    *
    * @param string|null $keyState **参数解释：** 加密主密钥key的状态。 **取值范围：** 1表示待激活状态,2 表示启用状态,3 表示禁用状态,4 表示计划删除状态,5 表示等待导入状态。
    *
    * @return $this
    */
    public function setKeyState($keyState)
    {
        $this->container['keyState'] = $keyState;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 当前region 。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释：** 当前region 。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets regionType
    *  **参数解释：** region类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRegionType()
    {
        return $this->container['regionType'];
    }

    /**
    * Sets regionType
    *
    * @param string|null $regionType **参数解释：** region类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRegionType($regionType)
    {
        $this->container['regionType'] = $regionType;
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

