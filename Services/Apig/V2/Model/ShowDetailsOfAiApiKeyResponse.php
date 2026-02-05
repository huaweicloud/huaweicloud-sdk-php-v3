<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailsOfAiApiKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailsOfAiApiKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aiApiKey  AIAPIKey值，不指定具体值时，由后台自动生成随机字符串。 支持大小写英文字母、数字，以及+-_/=特殊字符，长度为8~128个字符。
    * alias  AIAPIKey的别名。支持大小写字母，数字，下划线，中划线，长度为1~100个字符。
    * appId  凭据编号。
    * createTime  创建时间。
    * id  AIAPIKey编号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aiApiKey' => 'string',
            'alias' => 'string',
            'appId' => 'string',
            'createTime' => '\DateTime',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aiApiKey  AIAPIKey值，不指定具体值时，由后台自动生成随机字符串。 支持大小写英文字母、数字，以及+-_/=特殊字符，长度为8~128个字符。
    * alias  AIAPIKey的别名。支持大小写字母，数字，下划线，中划线，长度为1~100个字符。
    * appId  凭据编号。
    * createTime  创建时间。
    * id  AIAPIKey编号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aiApiKey' => null,
        'alias' => null,
        'appId' => null,
        'createTime' => 'date-time',
        'id' => null
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
    * aiApiKey  AIAPIKey值，不指定具体值时，由后台自动生成随机字符串。 支持大小写英文字母、数字，以及+-_/=特殊字符，长度为8~128个字符。
    * alias  AIAPIKey的别名。支持大小写字母，数字，下划线，中划线，长度为1~100个字符。
    * appId  凭据编号。
    * createTime  创建时间。
    * id  AIAPIKey编号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aiApiKey' => 'ai_api_key',
            'alias' => 'alias',
            'appId' => 'app_id',
            'createTime' => 'create_time',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aiApiKey  AIAPIKey值，不指定具体值时，由后台自动生成随机字符串。 支持大小写英文字母、数字，以及+-_/=特殊字符，长度为8~128个字符。
    * alias  AIAPIKey的别名。支持大小写字母，数字，下划线，中划线，长度为1~100个字符。
    * appId  凭据编号。
    * createTime  创建时间。
    * id  AIAPIKey编号。
    *
    * @var string[]
    */
    protected static $setters = [
            'aiApiKey' => 'setAiApiKey',
            'alias' => 'setAlias',
            'appId' => 'setAppId',
            'createTime' => 'setCreateTime',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aiApiKey  AIAPIKey值，不指定具体值时，由后台自动生成随机字符串。 支持大小写英文字母、数字，以及+-_/=特殊字符，长度为8~128个字符。
    * alias  AIAPIKey的别名。支持大小写字母，数字，下划线，中划线，长度为1~100个字符。
    * appId  凭据编号。
    * createTime  创建时间。
    * id  AIAPIKey编号。
    *
    * @var string[]
    */
    protected static $getters = [
            'aiApiKey' => 'getAiApiKey',
            'alias' => 'getAlias',
            'appId' => 'getAppId',
            'createTime' => 'getCreateTime',
            'id' => 'getId'
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
        $this->container['aiApiKey'] = isset($data['aiApiKey']) ? $data['aiApiKey'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['aiApiKey']) && (mb_strlen($this->container['aiApiKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'aiApiKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['aiApiKey']) && (mb_strlen($this->container['aiApiKey']) < 8)) {
                $invalidProperties[] = "invalid value for 'aiApiKey', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['aiApiKey']) && !preg_match("/^[A-Za-z0-9+\\-_\/=]{8,128}$/", $this->container['aiApiKey'])) {
                $invalidProperties[] = "invalid value for 'aiApiKey', must be conform to the pattern /^[A-Za-z0-9+\\-_\/=]{8,128}$/.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 100)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) < 1)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alias']) && !preg_match("/^[A-Za-z0-9_-]{1,100}$/", $this->container['alias'])) {
                $invalidProperties[] = "invalid value for 'alias', must be conform to the pattern /^[A-Za-z0-9_-]{1,100}$/.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 36)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
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
    * Gets aiApiKey
    *  AIAPIKey值，不指定具体值时，由后台自动生成随机字符串。 支持大小写英文字母、数字，以及+-_/=特殊字符，长度为8~128个字符。
    *
    * @return string|null
    */
    public function getAiApiKey()
    {
        return $this->container['aiApiKey'];
    }

    /**
    * Sets aiApiKey
    *
    * @param string|null $aiApiKey AIAPIKey值，不指定具体值时，由后台自动生成随机字符串。 支持大小写英文字母、数字，以及+-_/=特殊字符，长度为8~128个字符。
    *
    * @return $this
    */
    public function setAiApiKey($aiApiKey)
    {
        $this->container['aiApiKey'] = $aiApiKey;
        return $this;
    }

    /**
    * Gets alias
    *  AIAPIKey的别名。支持大小写字母，数字，下划线，中划线，长度为1~100个字符。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias AIAPIKey的别名。支持大小写字母，数字，下划线，中划线，长度为1~100个字符。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets appId
    *  凭据编号。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 凭据编号。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets id
    *  AIAPIKey编号。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id AIAPIKey编号。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

