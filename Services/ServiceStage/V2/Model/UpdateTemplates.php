<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTemplates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTemplates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  模板名称,非必填
    * description  模板描述,非必填
    * tags  模板标签,非必填
    * status  模板状态,非必填
    * obsUrl  obs地址,必填
    * isServicestage  应用是否托管到servicestage,1是托管,0是不托管,非必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'tags' => 'string[]',
            'status' => 'int',
            'obsUrl' => 'string',
            'isServicestage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  模板名称,非必填
    * description  模板描述,非必填
    * tags  模板标签,非必填
    * status  模板状态,非必填
    * obsUrl  obs地址,必填
    * isServicestage  应用是否托管到servicestage,1是托管,0是不托管,非必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'tags' => null,
        'status' => null,
        'obsUrl' => null,
        'isServicestage' => null
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
    * name  模板名称,非必填
    * description  模板描述,非必填
    * tags  模板标签,非必填
    * status  模板状态,非必填
    * obsUrl  obs地址,必填
    * isServicestage  应用是否托管到servicestage,1是托管,0是不托管,非必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'tags' => 'tags',
            'status' => 'status',
            'obsUrl' => 'obs_url',
            'isServicestage' => 'is_servicestage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  模板名称,非必填
    * description  模板描述,非必填
    * tags  模板标签,非必填
    * status  模板状态,非必填
    * obsUrl  obs地址,必填
    * isServicestage  应用是否托管到servicestage,1是托管,0是不托管,非必填
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'obsUrl' => 'setObsUrl',
            'isServicestage' => 'setIsServicestage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  模板名称,非必填
    * description  模板描述,非必填
    * tags  模板标签,非必填
    * status  模板状态,非必填
    * obsUrl  obs地址,必填
    * isServicestage  应用是否托管到servicestage,1是托管,0是不托管,非必填
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'obsUrl' => 'getObsUrl',
            'isServicestage' => 'getIsServicestage'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['obsUrl'] = isset($data['obsUrl']) ? $data['obsUrl'] : null;
        $this->container['isServicestage'] = isset($data['isServicestage']) ? $data['isServicestage'] : null;
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
    * Gets name
    *  模板名称,非必填
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 模板名称,非必填
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  模板描述,非必填
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
    * @param string|null $description 模板描述,非必填
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  模板标签,非必填
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 模板标签,非必填
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets status
    *  模板状态,非必填
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 模板状态,非必填
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets obsUrl
    *  obs地址,必填
    *
    * @return string|null
    */
    public function getObsUrl()
    {
        return $this->container['obsUrl'];
    }

    /**
    * Sets obsUrl
    *
    * @param string|null $obsUrl obs地址,必填
    *
    * @return $this
    */
    public function setObsUrl($obsUrl)
    {
        $this->container['obsUrl'] = $obsUrl;
        return $this;
    }

    /**
    * Gets isServicestage
    *  应用是否托管到servicestage,1是托管,0是不托管,非必填
    *
    * @return int|null
    */
    public function getIsServicestage()
    {
        return $this->container['isServicestage'];
    }

    /**
    * Sets isServicestage
    *
    * @param int|null $isServicestage 应用是否托管到servicestage,1是托管,0是不托管,非必填
    *
    * @return $this
    */
    public function setIsServicestage($isServicestage)
    {
        $this->container['isServicestage'] = $isServicestage;
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

