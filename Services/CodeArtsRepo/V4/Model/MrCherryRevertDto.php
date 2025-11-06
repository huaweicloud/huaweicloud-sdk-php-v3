<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MrCherryRevertDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MrCherryRevertDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branch  分支名
    * withNewMergeRequest  是否通过新建合并请求来Cherry pick或revert合并请求
    * message  提交信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branch' => 'string',
            'withNewMergeRequest' => 'bool',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branch  分支名
    * withNewMergeRequest  是否通过新建合并请求来Cherry pick或revert合并请求
    * message  提交信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branch' => null,
        'withNewMergeRequest' => null,
        'message' => null
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
    * branch  分支名
    * withNewMergeRequest  是否通过新建合并请求来Cherry pick或revert合并请求
    * message  提交信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branch' => 'branch',
            'withNewMergeRequest' => 'with_new_merge_request',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branch  分支名
    * withNewMergeRequest  是否通过新建合并请求来Cherry pick或revert合并请求
    * message  提交信息
    *
    * @var string[]
    */
    protected static $setters = [
            'branch' => 'setBranch',
            'withNewMergeRequest' => 'setWithNewMergeRequest',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branch  分支名
    * withNewMergeRequest  是否通过新建合并请求来Cherry pick或revert合并请求
    * message  提交信息
    *
    * @var string[]
    */
    protected static $getters = [
            'branch' => 'getBranch',
            'withNewMergeRequest' => 'getWithNewMergeRequest',
            'message' => 'getMessage'
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['withNewMergeRequest'] = isset($data['withNewMergeRequest']) ? $data['withNewMergeRequest'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['branch'] === null) {
            $invalidProperties[] = "'branch' can't be null";
        }
            if ((mb_strlen($this->container['branch']) > 100000)) {
                $invalidProperties[] = "invalid value for 'branch', the character length must be smaller than or equal to 100000.";
            }
            if ((mb_strlen($this->container['branch']) < 1)) {
                $invalidProperties[] = "invalid value for 'branch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 100000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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
    * Gets branch
    *  分支名
    *
    * @return string
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string $branch 分支名
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets withNewMergeRequest
    *  是否通过新建合并请求来Cherry pick或revert合并请求
    *
    * @return bool|null
    */
    public function getWithNewMergeRequest()
    {
        return $this->container['withNewMergeRequest'];
    }

    /**
    * Sets withNewMergeRequest
    *
    * @param bool|null $withNewMergeRequest 是否通过新建合并请求来Cherry pick或revert合并请求
    *
    * @return $this
    */
    public function setWithNewMergeRequest($withNewMergeRequest)
    {
        $this->container['withNewMergeRequest'] = $withNewMergeRequest;
        return $this;
    }

    /**
    * Gets message
    *  提交信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 提交信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

