<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResolverRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResolverRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resolverRules  解析器转发规则列表。
    * links  links
    * metadata  metadata
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resolverRules' => '\HuaweiCloud\SDK\Dns\V2\Model\ListResolverRuleParam[]',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink',
            'metadata' => '\HuaweiCloud\SDK\Dns\V2\Model\Metadata',
            'pageInfo' => '\HuaweiCloud\SDK\Dns\V2\Model\PageInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resolverRules  解析器转发规则列表。
    * links  links
    * metadata  metadata
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resolverRules' => null,
        'links' => null,
        'metadata' => null,
        'pageInfo' => null
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
    * resolverRules  解析器转发规则列表。
    * links  links
    * metadata  metadata
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resolverRules' => 'resolver_rules',
            'links' => 'links',
            'metadata' => 'metadata',
            'pageInfo' => 'page_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resolverRules  解析器转发规则列表。
    * links  links
    * metadata  metadata
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'resolverRules' => 'setResolverRules',
            'links' => 'setLinks',
            'metadata' => 'setMetadata',
            'pageInfo' => 'setPageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resolverRules  解析器转发规则列表。
    * links  links
    * metadata  metadata
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'resolverRules' => 'getResolverRules',
            'links' => 'getLinks',
            'metadata' => 'getMetadata',
            'pageInfo' => 'getPageInfo'
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
        $this->container['resolverRules'] = isset($data['resolverRules']) ? $data['resolverRules'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
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
    * Gets resolverRules
    *  解析器转发规则列表。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\ListResolverRuleParam[]|null
    */
    public function getResolverRules()
    {
        return $this->container['resolverRules'];
    }

    /**
    * Sets resolverRules
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\ListResolverRuleParam[]|null $resolverRules 解析器转发规则列表。
    *
    * @return $this
    */
    public function setResolverRules($resolverRules)
    {
        $this->container['resolverRules'] = $resolverRules;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Metadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Metadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PageInfo|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PageInfo|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
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

