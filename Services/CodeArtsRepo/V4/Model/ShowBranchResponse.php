<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBranchResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBranchResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  分支名
    * commit  commit
    * merged  用户id
    * protected  是否为保护分支
    * developersCanPush  开发者是否可以推送
    * developersCanMerge  开发者是否可以合并
    * canPush  是否可以推送
    * default  是否为默认分支
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'commit' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto',
            'merged' => 'bool',
            'protected' => 'bool',
            'developersCanPush' => 'bool',
            'developersCanMerge' => 'bool',
            'canPush' => 'bool',
            'default' => 'bool',
            'xTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  分支名
    * commit  commit
    * merged  用户id
    * protected  是否为保护分支
    * developersCanPush  开发者是否可以推送
    * developersCanMerge  开发者是否可以合并
    * canPush  是否可以推送
    * default  是否为默认分支
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'commit' => null,
        'merged' => null,
        'protected' => null,
        'developersCanPush' => null,
        'developersCanMerge' => null,
        'canPush' => null,
        'default' => null,
        'xTotal' => null
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
    * name  分支名
    * commit  commit
    * merged  用户id
    * protected  是否为保护分支
    * developersCanPush  开发者是否可以推送
    * developersCanMerge  开发者是否可以合并
    * canPush  是否可以推送
    * default  是否为默认分支
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'commit' => 'commit',
            'merged' => 'merged',
            'protected' => 'protected',
            'developersCanPush' => 'developers_can_push',
            'developersCanMerge' => 'developers_can_merge',
            'canPush' => 'can_push',
            'default' => 'default',
            'xTotal' => 'X-Total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  分支名
    * commit  commit
    * merged  用户id
    * protected  是否为保护分支
    * developersCanPush  开发者是否可以推送
    * developersCanMerge  开发者是否可以合并
    * canPush  是否可以推送
    * default  是否为默认分支
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'commit' => 'setCommit',
            'merged' => 'setMerged',
            'protected' => 'setProtected',
            'developersCanPush' => 'setDevelopersCanPush',
            'developersCanMerge' => 'setDevelopersCanMerge',
            'canPush' => 'setCanPush',
            'default' => 'setDefault',
            'xTotal' => 'setXTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  分支名
    * commit  commit
    * merged  用户id
    * protected  是否为保护分支
    * developersCanPush  开发者是否可以推送
    * developersCanMerge  开发者是否可以合并
    * canPush  是否可以推送
    * default  是否为默认分支
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'commit' => 'getCommit',
            'merged' => 'getMerged',
            'protected' => 'getProtected',
            'developersCanPush' => 'getDevelopersCanPush',
            'developersCanMerge' => 'getDevelopersCanMerge',
            'canPush' => 'getCanPush',
            'default' => 'getDefault',
            'xTotal' => 'getXTotal'
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
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['merged'] = isset($data['merged']) ? $data['merged'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
        $this->container['developersCanPush'] = isset($data['developersCanPush']) ? $data['developersCanPush'] : null;
        $this->container['developersCanMerge'] = isset($data['developersCanMerge']) ? $data['developersCanMerge'] : null;
        $this->container['canPush'] = isset($data['canPush']) ? $data['canPush'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['xTotal'] = isset($data['xTotal']) ? $data['xTotal'] : null;
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
    * Gets commit
    *  commit
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto|null $commit commit
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets merged
    *  用户id
    *
    * @return bool|null
    */
    public function getMerged()
    {
        return $this->container['merged'];
    }

    /**
    * Sets merged
    *
    * @param bool|null $merged 用户id
    *
    * @return $this
    */
    public function setMerged($merged)
    {
        $this->container['merged'] = $merged;
        return $this;
    }

    /**
    * Gets protected
    *  是否为保护分支
    *
    * @return bool|null
    */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
    * Sets protected
    *
    * @param bool|null $protected 是否为保护分支
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
        return $this;
    }

    /**
    * Gets developersCanPush
    *  开发者是否可以推送
    *
    * @return bool|null
    */
    public function getDevelopersCanPush()
    {
        return $this->container['developersCanPush'];
    }

    /**
    * Sets developersCanPush
    *
    * @param bool|null $developersCanPush 开发者是否可以推送
    *
    * @return $this
    */
    public function setDevelopersCanPush($developersCanPush)
    {
        $this->container['developersCanPush'] = $developersCanPush;
        return $this;
    }

    /**
    * Gets developersCanMerge
    *  开发者是否可以合并
    *
    * @return bool|null
    */
    public function getDevelopersCanMerge()
    {
        return $this->container['developersCanMerge'];
    }

    /**
    * Sets developersCanMerge
    *
    * @param bool|null $developersCanMerge 开发者是否可以合并
    *
    * @return $this
    */
    public function setDevelopersCanMerge($developersCanMerge)
    {
        $this->container['developersCanMerge'] = $developersCanMerge;
        return $this;
    }

    /**
    * Gets canPush
    *  是否可以推送
    *
    * @return bool|null
    */
    public function getCanPush()
    {
        return $this->container['canPush'];
    }

    /**
    * Sets canPush
    *
    * @param bool|null $canPush 是否可以推送
    *
    * @return $this
    */
    public function setCanPush($canPush)
    {
        $this->container['canPush'] = $canPush;
        return $this;
    }

    /**
    * Gets default
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 是否为默认分支
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets xTotal
    *  xTotal
    *
    * @return string|null
    */
    public function getXTotal()
    {
        return $this->container['xTotal'];
    }

    /**
    * Sets xTotal
    *
    * @param string|null $xTotal xTotal
    *
    * @return $this
    */
    public function setXTotal($xTotal)
    {
        $this->container['xTotal'] = $xTotal;
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

