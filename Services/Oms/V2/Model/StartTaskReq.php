<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * connectionString  连接字符串，用于微软云Blob鉴权
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * srcSecurityToken  源端节点临时Token
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstSecurityToken  目标端节点临时Token
    * sourceCdnAuthenticationKey  CDN鉴权秘钥。
    * migrateFailedObject  迁移类型，标识是否为全量迁移，默认false（全量迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量迁移。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcAk' => 'string',
            'srcSk' => 'string',
            'connectionString' => 'string',
            'jsonAuthFile' => 'string',
            'srcSecurityToken' => 'string',
            'dstAk' => 'string',
            'dstSk' => 'string',
            'dstSecurityToken' => 'string',
            'sourceCdnAuthenticationKey' => 'string',
            'migrateFailedObject' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * connectionString  连接字符串，用于微软云Blob鉴权
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * srcSecurityToken  源端节点临时Token
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstSecurityToken  目标端节点临时Token
    * sourceCdnAuthenticationKey  CDN鉴权秘钥。
    * migrateFailedObject  迁移类型，标识是否为全量迁移，默认false（全量迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量迁移。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcAk' => null,
        'srcSk' => null,
        'connectionString' => null,
        'jsonAuthFile' => null,
        'srcSecurityToken' => null,
        'dstAk' => null,
        'dstSk' => null,
        'dstSecurityToken' => null,
        'sourceCdnAuthenticationKey' => null,
        'migrateFailedObject' => null
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
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * connectionString  连接字符串，用于微软云Blob鉴权
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * srcSecurityToken  源端节点临时Token
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstSecurityToken  目标端节点临时Token
    * sourceCdnAuthenticationKey  CDN鉴权秘钥。
    * migrateFailedObject  迁移类型，标识是否为全量迁移，默认false（全量迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量迁移。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcAk' => 'src_ak',
            'srcSk' => 'src_sk',
            'connectionString' => 'connection_string',
            'jsonAuthFile' => 'json_auth_file',
            'srcSecurityToken' => 'src_security_token',
            'dstAk' => 'dst_ak',
            'dstSk' => 'dst_sk',
            'dstSecurityToken' => 'dst_security_token',
            'sourceCdnAuthenticationKey' => 'source_cdn_authentication_key',
            'migrateFailedObject' => 'migrate_failed_object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * connectionString  连接字符串，用于微软云Blob鉴权
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * srcSecurityToken  源端节点临时Token
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstSecurityToken  目标端节点临时Token
    * sourceCdnAuthenticationKey  CDN鉴权秘钥。
    * migrateFailedObject  迁移类型，标识是否为全量迁移，默认false（全量迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量迁移。
    *
    * @var string[]
    */
    protected static $setters = [
            'srcAk' => 'setSrcAk',
            'srcSk' => 'setSrcSk',
            'connectionString' => 'setConnectionString',
            'jsonAuthFile' => 'setJsonAuthFile',
            'srcSecurityToken' => 'setSrcSecurityToken',
            'dstAk' => 'setDstAk',
            'dstSk' => 'setDstSk',
            'dstSecurityToken' => 'setDstSecurityToken',
            'sourceCdnAuthenticationKey' => 'setSourceCdnAuthenticationKey',
            'migrateFailedObject' => 'setMigrateFailedObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcAk  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * srcSk  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    * connectionString  连接字符串，用于微软云Blob鉴权
    * jsonAuthFile  用于谷歌云Cloud Storage鉴权
    * srcSecurityToken  源端节点临时Token
    * dstAk  目的端节点AK（最大长度100个字符）。
    * dstSk  目的端节点SK（最大长度100个字符）。
    * dstSecurityToken  目标端节点临时Token
    * sourceCdnAuthenticationKey  CDN鉴权秘钥。
    * migrateFailedObject  迁移类型，标识是否为全量迁移，默认false（全量迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量迁移。
    *
    * @var string[]
    */
    protected static $getters = [
            'srcAk' => 'getSrcAk',
            'srcSk' => 'getSrcSk',
            'connectionString' => 'getConnectionString',
            'jsonAuthFile' => 'getJsonAuthFile',
            'srcSecurityToken' => 'getSrcSecurityToken',
            'dstAk' => 'getDstAk',
            'dstSk' => 'getDstSk',
            'dstSecurityToken' => 'getDstSecurityToken',
            'sourceCdnAuthenticationKey' => 'getSourceCdnAuthenticationKey',
            'migrateFailedObject' => 'getMigrateFailedObject'
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
        $this->container['srcAk'] = isset($data['srcAk']) ? $data['srcAk'] : null;
        $this->container['srcSk'] = isset($data['srcSk']) ? $data['srcSk'] : null;
        $this->container['connectionString'] = isset($data['connectionString']) ? $data['connectionString'] : null;
        $this->container['jsonAuthFile'] = isset($data['jsonAuthFile']) ? $data['jsonAuthFile'] : null;
        $this->container['srcSecurityToken'] = isset($data['srcSecurityToken']) ? $data['srcSecurityToken'] : null;
        $this->container['dstAk'] = isset($data['dstAk']) ? $data['dstAk'] : null;
        $this->container['dstSk'] = isset($data['dstSk']) ? $data['dstSk'] : null;
        $this->container['dstSecurityToken'] = isset($data['dstSecurityToken']) ? $data['dstSecurityToken'] : null;
        $this->container['sourceCdnAuthenticationKey'] = isset($data['sourceCdnAuthenticationKey']) ? $data['sourceCdnAuthenticationKey'] : null;
        $this->container['migrateFailedObject'] = isset($data['migrateFailedObject']) ? $data['migrateFailedObject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['srcAk']) && (mb_strlen($this->container['srcAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['srcAk']) && (mb_strlen($this->container['srcAk']) < 1)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['srcAk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcAk'])) {
                $invalidProperties[] = "invalid value for 'srcAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['srcSk']) && (mb_strlen($this->container['srcSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['srcSk']) && (mb_strlen($this->container['srcSk']) < 1)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['srcSk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcSk'])) {
                $invalidProperties[] = "invalid value for 'srcSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['connectionString']) && (mb_strlen($this->container['connectionString']) > 2048)) {
                $invalidProperties[] = "invalid value for 'connectionString', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['connectionString']) && (mb_strlen($this->container['connectionString']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectionString', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jsonAuthFile']) && (mb_strlen($this->container['jsonAuthFile']) > 65535)) {
                $invalidProperties[] = "invalid value for 'jsonAuthFile', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['jsonAuthFile']) && (mb_strlen($this->container['jsonAuthFile']) < 0)) {
                $invalidProperties[] = "invalid value for 'jsonAuthFile', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcSecurityToken']) && (mb_strlen($this->container['srcSecurityToken']) > 16384)) {
                $invalidProperties[] = "invalid value for 'srcSecurityToken', the character length must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['srcSecurityToken']) && (mb_strlen($this->container['srcSecurityToken']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcSecurityToken', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcSecurityToken']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcSecurityToken'])) {
                $invalidProperties[] = "invalid value for 'srcSecurityToken', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['dstAk'] === null) {
            $invalidProperties[] = "'dstAk' can't be null";
        }
            if ((mb_strlen($this->container['dstAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dstAk']) < 1)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstAk'])) {
                $invalidProperties[] = "invalid value for 'dstAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['dstSk'] === null) {
            $invalidProperties[] = "'dstSk' can't be null";
        }
            if ((mb_strlen($this->container['dstSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dstSk']) < 1)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstSk'])) {
                $invalidProperties[] = "invalid value for 'dstSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['dstSecurityToken']) && (mb_strlen($this->container['dstSecurityToken']) > 16384)) {
                $invalidProperties[] = "invalid value for 'dstSecurityToken', the character length must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['dstSecurityToken']) && (mb_strlen($this->container['dstSecurityToken']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstSecurityToken', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstSecurityToken']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstSecurityToken'])) {
                $invalidProperties[] = "invalid value for 'dstSecurityToken', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && (mb_strlen($this->container['sourceCdnAuthenticationKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && (mb_strlen($this->container['sourceCdnAuthenticationKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['sourceCdnAuthenticationKey'])) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
    * Gets srcAk
    *  源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return string|null
    */
    public function getSrcAk()
    {
        return $this->container['srcAk'];
    }

    /**
    * Sets srcAk
    *
    * @param string|null $srcAk 源端节点AK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return $this
    */
    public function setSrcAk($srcAk)
    {
        $this->container['srcAk'] = $srcAk;
        return $this;
    }

    /**
    * Gets srcSk
    *  源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return string|null
    */
    public function getSrcSk()
    {
        return $this->container['srcSk'];
    }

    /**
    * Sets srcSk
    *
    * @param string|null $srcSk 源端节点SK（最大长度100个字符）。URL列表迁移任务不需要填写此参数。
    *
    * @return $this
    */
    public function setSrcSk($srcSk)
    {
        $this->container['srcSk'] = $srcSk;
        return $this;
    }

    /**
    * Gets connectionString
    *  连接字符串，用于微软云Blob鉴权
    *
    * @return string|null
    */
    public function getConnectionString()
    {
        return $this->container['connectionString'];
    }

    /**
    * Sets connectionString
    *
    * @param string|null $connectionString 连接字符串，用于微软云Blob鉴权
    *
    * @return $this
    */
    public function setConnectionString($connectionString)
    {
        $this->container['connectionString'] = $connectionString;
        return $this;
    }

    /**
    * Gets jsonAuthFile
    *  用于谷歌云Cloud Storage鉴权
    *
    * @return string|null
    */
    public function getJsonAuthFile()
    {
        return $this->container['jsonAuthFile'];
    }

    /**
    * Sets jsonAuthFile
    *
    * @param string|null $jsonAuthFile 用于谷歌云Cloud Storage鉴权
    *
    * @return $this
    */
    public function setJsonAuthFile($jsonAuthFile)
    {
        $this->container['jsonAuthFile'] = $jsonAuthFile;
        return $this;
    }

    /**
    * Gets srcSecurityToken
    *  源端节点临时Token
    *
    * @return string|null
    */
    public function getSrcSecurityToken()
    {
        return $this->container['srcSecurityToken'];
    }

    /**
    * Sets srcSecurityToken
    *
    * @param string|null $srcSecurityToken 源端节点临时Token
    *
    * @return $this
    */
    public function setSrcSecurityToken($srcSecurityToken)
    {
        $this->container['srcSecurityToken'] = $srcSecurityToken;
        return $this;
    }

    /**
    * Gets dstAk
    *  目的端节点AK（最大长度100个字符）。
    *
    * @return string
    */
    public function getDstAk()
    {
        return $this->container['dstAk'];
    }

    /**
    * Sets dstAk
    *
    * @param string $dstAk 目的端节点AK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setDstAk($dstAk)
    {
        $this->container['dstAk'] = $dstAk;
        return $this;
    }

    /**
    * Gets dstSk
    *  目的端节点SK（最大长度100个字符）。
    *
    * @return string
    */
    public function getDstSk()
    {
        return $this->container['dstSk'];
    }

    /**
    * Sets dstSk
    *
    * @param string $dstSk 目的端节点SK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setDstSk($dstSk)
    {
        $this->container['dstSk'] = $dstSk;
        return $this;
    }

    /**
    * Gets dstSecurityToken
    *  目标端节点临时Token
    *
    * @return string|null
    */
    public function getDstSecurityToken()
    {
        return $this->container['dstSecurityToken'];
    }

    /**
    * Sets dstSecurityToken
    *
    * @param string|null $dstSecurityToken 目标端节点临时Token
    *
    * @return $this
    */
    public function setDstSecurityToken($dstSecurityToken)
    {
        $this->container['dstSecurityToken'] = $dstSecurityToken;
        return $this;
    }

    /**
    * Gets sourceCdnAuthenticationKey
    *  CDN鉴权秘钥。
    *
    * @return string|null
    */
    public function getSourceCdnAuthenticationKey()
    {
        return $this->container['sourceCdnAuthenticationKey'];
    }

    /**
    * Sets sourceCdnAuthenticationKey
    *
    * @param string|null $sourceCdnAuthenticationKey CDN鉴权秘钥。
    *
    * @return $this
    */
    public function setSourceCdnAuthenticationKey($sourceCdnAuthenticationKey)
    {
        $this->container['sourceCdnAuthenticationKey'] = $sourceCdnAuthenticationKey;
        return $this;
    }

    /**
    * Gets migrateFailedObject
    *  迁移类型，标识是否为全量迁移，默认false（全量迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量迁移。
    *
    * @return bool|null
    */
    public function getMigrateFailedObject()
    {
        return $this->container['migrateFailedObject'];
    }

    /**
    * Sets migrateFailedObject
    *
    * @param bool|null $migrateFailedObject 迁移类型，标识是否为全量迁移，默认false（全量迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量迁移。
    *
    * @return $this
    */
    public function setMigrateFailedObject($migrateFailedObject)
    {
        $this->container['migrateFailedObject'] = $migrateFailedObject;
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

