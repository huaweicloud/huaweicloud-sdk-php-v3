<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateScriptRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateScriptRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptUuid' => 'string',
            'xLanguage' => 'string',
            'xProjectId' => 'string',
            'xUserProfile' => 'string',
            'body' => '\HuaweiCloud\SDK\Coc\V1\Model\EditScriptModel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptUuid' => null,
        'xLanguage' => null,
        'xProjectId' => null,
        'xUserProfile' => null,
        'body' => null
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
    * scriptUuid  脚本uuid
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptUuid' => 'script_uuid',
            'xLanguage' => 'X-Language',
            'xProjectId' => 'x-project-id',
            'xUserProfile' => 'x-user-profile',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptUuid  脚本uuid
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptUuid' => 'setScriptUuid',
            'xLanguage' => 'setXLanguage',
            'xProjectId' => 'setXProjectId',
            'xUserProfile' => 'setXUserProfile',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptUuid  脚本uuid
    * xLanguage  国际化标记，zh-cn表示中文，en-us或不传表示英文
    * xProjectId  项目ID，一个项目对应一个region
    * xUserProfile  IAM5.0用户信息
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptUuid' => 'getScriptUuid',
            'xLanguage' => 'getXLanguage',
            'xProjectId' => 'getXProjectId',
            'xUserProfile' => 'getXUserProfile',
            'body' => 'getBody'
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
        $this->container['scriptUuid'] = isset($data['scriptUuid']) ? $data['scriptUuid'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['xUserProfile'] = isset($data['xUserProfile']) ? $data['xUserProfile'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scriptUuid'] === null) {
            $invalidProperties[] = "'scriptUuid' can't be null";
        }
            if ((mb_strlen($this->container['scriptUuid']) > 25)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be smaller than or equal to 25.";
            }
            if ((mb_strlen($this->container['scriptUuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be bigger than or equal to 1.";
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
    * Gets scriptUuid
    *  脚本uuid
    *
    * @return string
    */
    public function getScriptUuid()
    {
        return $this->container['scriptUuid'];
    }

    /**
    * Sets scriptUuid
    *
    * @param string $scriptUuid 脚本uuid
    *
    * @return $this
    */
    public function setScriptUuid($scriptUuid)
    {
        $this->container['scriptUuid'] = $scriptUuid;
        return $this;
    }

    /**
    * Gets xLanguage
    *  国际化标记，zh-cn表示中文，en-us或不传表示英文
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 国际化标记，zh-cn表示中文，en-us或不传表示英文
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，一个项目对应一个region
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，一个项目对应一个region
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets xUserProfile
    *  IAM5.0用户信息
    *
    * @return string|null
    */
    public function getXUserProfile()
    {
        return $this->container['xUserProfile'];
    }

    /**
    * Sets xUserProfile
    *
    * @param string|null $xUserProfile IAM5.0用户信息
    *
    * @return $this
    */
    public function setXUserProfile($xUserProfile)
    {
        $this->container['xUserProfile'] = $xUserProfile;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\EditScriptModel|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\EditScriptModel|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

