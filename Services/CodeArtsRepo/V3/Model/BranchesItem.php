<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BranchesItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BranchesItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commit  commit
    * divergingCommitCounts  divergingCommitCounts
    * name  分支名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commit' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CommitV2',
            'divergingCommitCounts' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DivergingCommitCounts',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commit  commit
    * divergingCommitCounts  divergingCommitCounts
    * name  分支名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commit' => null,
        'divergingCommitCounts' => null,
        'name' => null
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
    * commit  commit
    * divergingCommitCounts  divergingCommitCounts
    * name  分支名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commit' => 'commit',
            'divergingCommitCounts' => 'diverging_commit_counts',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commit  commit
    * divergingCommitCounts  divergingCommitCounts
    * name  分支名
    *
    * @var string[]
    */
    protected static $setters = [
            'commit' => 'setCommit',
            'divergingCommitCounts' => 'setDivergingCommitCounts',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commit  commit
    * divergingCommitCounts  divergingCommitCounts
    * name  分支名
    *
    * @var string[]
    */
    protected static $getters = [
            'commit' => 'getCommit',
            'divergingCommitCounts' => 'getDivergingCommitCounts',
            'name' => 'getName'
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
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['divergingCommitCounts'] = isset($data['divergingCommitCounts']) ? $data['divergingCommitCounts'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
    * Gets commit
    *  commit
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CommitV2|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\CommitV2|null $commit commit
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets divergingCommitCounts
    *  divergingCommitCounts
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DivergingCommitCounts|null
    */
    public function getDivergingCommitCounts()
    {
        return $this->container['divergingCommitCounts'];
    }

    /**
    * Sets divergingCommitCounts
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DivergingCommitCounts|null $divergingCommitCounts divergingCommitCounts
    *
    * @return $this
    */
    public function setDivergingCommitCounts($divergingCommitCounts)
    {
        $this->container['divergingCommitCounts'] = $divergingCommitCounts;
        return $this;
    }

    /**
    * Gets name
    *  分支名
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
    * @param string|null $name 分支名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

