<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRecommendOfficialTemplateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRecommendOfficialTemplateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gitUrl  代码仓地址
    * branch  代码仓分支名称你
    * tags  代码仓TAG
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gitUrl' => 'string',
            'branch' => 'string',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gitUrl  代码仓地址
    * branch  代码仓分支名称你
    * tags  代码仓TAG
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gitUrl' => null,
        'branch' => null,
        'tags' => null
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
    * gitUrl  代码仓地址
    * branch  代码仓分支名称你
    * tags  代码仓TAG
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gitUrl' => 'git_url',
            'branch' => 'branch',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gitUrl  代码仓地址
    * branch  代码仓分支名称你
    * tags  代码仓TAG
    *
    * @var string[]
    */
    protected static $setters = [
            'gitUrl' => 'setGitUrl',
            'branch' => 'setBranch',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gitUrl  代码仓地址
    * branch  代码仓分支名称你
    * tags  代码仓TAG
    *
    * @var string[]
    */
    protected static $getters = [
            'gitUrl' => 'getGitUrl',
            'branch' => 'getBranch',
            'tags' => 'getTags'
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
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['gitUrl'] === null) {
            $invalidProperties[] = "'gitUrl' can't be null";
        }
        if ($this->container['branch'] === null) {
            $invalidProperties[] = "'branch' can't be null";
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
    * Gets gitUrl
    *  代码仓地址
    *
    * @return string
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string $gitUrl 代码仓地址
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets branch
    *  代码仓分支名称你
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
    * @param string $branch 代码仓分支名称你
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets tags
    *  代码仓TAG
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 代码仓TAG
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

