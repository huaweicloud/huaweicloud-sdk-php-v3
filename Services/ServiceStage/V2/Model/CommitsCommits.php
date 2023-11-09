<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitsCommits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Commits_commits';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sha  提交记录sha值。
    * message  提交记录描述。
    * authoredDate  合入时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sha' => 'string',
            'message' => 'string',
            'authoredDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sha  提交记录sha值。
    * message  提交记录描述。
    * authoredDate  合入时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sha' => null,
        'message' => null,
        'authoredDate' => null
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
    * sha  提交记录sha值。
    * message  提交记录描述。
    * authoredDate  合入时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sha' => 'sha',
            'message' => 'message',
            'authoredDate' => 'authored_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sha  提交记录sha值。
    * message  提交记录描述。
    * authoredDate  合入时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'sha' => 'setSha',
            'message' => 'setMessage',
            'authoredDate' => 'setAuthoredDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sha  提交记录sha值。
    * message  提交记录描述。
    * authoredDate  合入时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'sha' => 'getSha',
            'message' => 'getMessage',
            'authoredDate' => 'getAuthoredDate'
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
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['authoredDate'] = isset($data['authoredDate']) ? $data['authoredDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sha'] === null) {
            $invalidProperties[] = "'sha' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['authoredDate'] === null) {
            $invalidProperties[] = "'authoredDate' can't be null";
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
    * Gets sha
    *  提交记录sha值。
    *
    * @return string
    */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
    * Sets sha
    *
    * @param string $sha 提交记录sha值。
    *
    * @return $this
    */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;
        return $this;
    }

    /**
    * Gets message
    *  提交记录描述。
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message 提交记录描述。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets authoredDate
    *  合入时间。
    *
    * @return string
    */
    public function getAuthoredDate()
    {
        return $this->container['authoredDate'];
    }

    /**
    * Sets authoredDate
    *
    * @param string $authoredDate 合入时间。
    *
    * @return $this
    */
    public function setAuthoredDate($authoredDate)
    {
        $this->container['authoredDate'] = $authoredDate;
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

