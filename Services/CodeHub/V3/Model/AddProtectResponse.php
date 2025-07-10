<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddProtectResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddProtectResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  分支名称
    * commit  commit
    * protected  是否保护
    * developersCanPush  是否允许开发者提交
    * developersCanMerge  是否允许开发者合并
    * masterCanPush  是否允许管理员提交
    * masterCanMerge  是否允许管理员合并
    * noOneCanPush  没有人允许提交
    * noOneCanMerge  没有人允许合并
    * inAnOpenedMergeRequest  是否在一个打开的合并请求
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'commit' => '\HuaweiCloud\SDK\CodeHub\V3\Model\CommitRepoV2',
            'protected' => 'bool',
            'developersCanPush' => 'bool',
            'developersCanMerge' => 'bool',
            'masterCanPush' => 'bool',
            'masterCanMerge' => 'bool',
            'noOneCanPush' => 'bool',
            'noOneCanMerge' => 'bool',
            'inAnOpenedMergeRequest' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  分支名称
    * commit  commit
    * protected  是否保护
    * developersCanPush  是否允许开发者提交
    * developersCanMerge  是否允许开发者合并
    * masterCanPush  是否允许管理员提交
    * masterCanMerge  是否允许管理员合并
    * noOneCanPush  没有人允许提交
    * noOneCanMerge  没有人允许合并
    * inAnOpenedMergeRequest  是否在一个打开的合并请求
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'commit' => null,
        'protected' => null,
        'developersCanPush' => null,
        'developersCanMerge' => null,
        'masterCanPush' => null,
        'masterCanMerge' => null,
        'noOneCanPush' => null,
        'noOneCanMerge' => null,
        'inAnOpenedMergeRequest' => null
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
    * name  分支名称
    * commit  commit
    * protected  是否保护
    * developersCanPush  是否允许开发者提交
    * developersCanMerge  是否允许开发者合并
    * masterCanPush  是否允许管理员提交
    * masterCanMerge  是否允许管理员合并
    * noOneCanPush  没有人允许提交
    * noOneCanMerge  没有人允许合并
    * inAnOpenedMergeRequest  是否在一个打开的合并请求
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'commit' => 'commit',
            'protected' => 'protected',
            'developersCanPush' => 'developers_can_push',
            'developersCanMerge' => 'developers_can_merge',
            'masterCanPush' => 'master_can_push',
            'masterCanMerge' => 'master_can_merge',
            'noOneCanPush' => 'no_one_can_push',
            'noOneCanMerge' => 'no_one_can_merge',
            'inAnOpenedMergeRequest' => 'in_an_opened_merge_request'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  分支名称
    * commit  commit
    * protected  是否保护
    * developersCanPush  是否允许开发者提交
    * developersCanMerge  是否允许开发者合并
    * masterCanPush  是否允许管理员提交
    * masterCanMerge  是否允许管理员合并
    * noOneCanPush  没有人允许提交
    * noOneCanMerge  没有人允许合并
    * inAnOpenedMergeRequest  是否在一个打开的合并请求
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'commit' => 'setCommit',
            'protected' => 'setProtected',
            'developersCanPush' => 'setDevelopersCanPush',
            'developersCanMerge' => 'setDevelopersCanMerge',
            'masterCanPush' => 'setMasterCanPush',
            'masterCanMerge' => 'setMasterCanMerge',
            'noOneCanPush' => 'setNoOneCanPush',
            'noOneCanMerge' => 'setNoOneCanMerge',
            'inAnOpenedMergeRequest' => 'setInAnOpenedMergeRequest'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  分支名称
    * commit  commit
    * protected  是否保护
    * developersCanPush  是否允许开发者提交
    * developersCanMerge  是否允许开发者合并
    * masterCanPush  是否允许管理员提交
    * masterCanMerge  是否允许管理员合并
    * noOneCanPush  没有人允许提交
    * noOneCanMerge  没有人允许合并
    * inAnOpenedMergeRequest  是否在一个打开的合并请求
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'commit' => 'getCommit',
            'protected' => 'getProtected',
            'developersCanPush' => 'getDevelopersCanPush',
            'developersCanMerge' => 'getDevelopersCanMerge',
            'masterCanPush' => 'getMasterCanPush',
            'masterCanMerge' => 'getMasterCanMerge',
            'noOneCanPush' => 'getNoOneCanPush',
            'noOneCanMerge' => 'getNoOneCanMerge',
            'inAnOpenedMergeRequest' => 'getInAnOpenedMergeRequest'
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
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
        $this->container['developersCanPush'] = isset($data['developersCanPush']) ? $data['developersCanPush'] : null;
        $this->container['developersCanMerge'] = isset($data['developersCanMerge']) ? $data['developersCanMerge'] : null;
        $this->container['masterCanPush'] = isset($data['masterCanPush']) ? $data['masterCanPush'] : null;
        $this->container['masterCanMerge'] = isset($data['masterCanMerge']) ? $data['masterCanMerge'] : null;
        $this->container['noOneCanPush'] = isset($data['noOneCanPush']) ? $data['noOneCanPush'] : null;
        $this->container['noOneCanMerge'] = isset($data['noOneCanMerge']) ? $data['noOneCanMerge'] : null;
        $this->container['inAnOpenedMergeRequest'] = isset($data['inAnOpenedMergeRequest']) ? $data['inAnOpenedMergeRequest'] : null;
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
    *  分支名称
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
    * @param string|null $name 分支名称
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
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\CommitRepoV2|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\CommitRepoV2|null $commit commit
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets protected
    *  是否保护
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
    * @param bool|null $protected 是否保护
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
    *  是否允许开发者提交
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
    * @param bool|null $developersCanPush 是否允许开发者提交
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
    *  是否允许开发者合并
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
    * @param bool|null $developersCanMerge 是否允许开发者合并
    *
    * @return $this
    */
    public function setDevelopersCanMerge($developersCanMerge)
    {
        $this->container['developersCanMerge'] = $developersCanMerge;
        return $this;
    }

    /**
    * Gets masterCanPush
    *  是否允许管理员提交
    *
    * @return bool|null
    */
    public function getMasterCanPush()
    {
        return $this->container['masterCanPush'];
    }

    /**
    * Sets masterCanPush
    *
    * @param bool|null $masterCanPush 是否允许管理员提交
    *
    * @return $this
    */
    public function setMasterCanPush($masterCanPush)
    {
        $this->container['masterCanPush'] = $masterCanPush;
        return $this;
    }

    /**
    * Gets masterCanMerge
    *  是否允许管理员合并
    *
    * @return bool|null
    */
    public function getMasterCanMerge()
    {
        return $this->container['masterCanMerge'];
    }

    /**
    * Sets masterCanMerge
    *
    * @param bool|null $masterCanMerge 是否允许管理员合并
    *
    * @return $this
    */
    public function setMasterCanMerge($masterCanMerge)
    {
        $this->container['masterCanMerge'] = $masterCanMerge;
        return $this;
    }

    /**
    * Gets noOneCanPush
    *  没有人允许提交
    *
    * @return bool|null
    */
    public function getNoOneCanPush()
    {
        return $this->container['noOneCanPush'];
    }

    /**
    * Sets noOneCanPush
    *
    * @param bool|null $noOneCanPush 没有人允许提交
    *
    * @return $this
    */
    public function setNoOneCanPush($noOneCanPush)
    {
        $this->container['noOneCanPush'] = $noOneCanPush;
        return $this;
    }

    /**
    * Gets noOneCanMerge
    *  没有人允许合并
    *
    * @return bool|null
    */
    public function getNoOneCanMerge()
    {
        return $this->container['noOneCanMerge'];
    }

    /**
    * Sets noOneCanMerge
    *
    * @param bool|null $noOneCanMerge 没有人允许合并
    *
    * @return $this
    */
    public function setNoOneCanMerge($noOneCanMerge)
    {
        $this->container['noOneCanMerge'] = $noOneCanMerge;
        return $this;
    }

    /**
    * Gets inAnOpenedMergeRequest
    *  是否在一个打开的合并请求
    *
    * @return bool|null
    */
    public function getInAnOpenedMergeRequest()
    {
        return $this->container['inAnOpenedMergeRequest'];
    }

    /**
    * Sets inAnOpenedMergeRequest
    *
    * @param bool|null $inAnOpenedMergeRequest 是否在一个打开的合并请求
    *
    * @return $this
    */
    public function setInAnOpenedMergeRequest($inAnOpenedMergeRequest)
    {
        $this->container['inAnOpenedMergeRequest'] = $inAnOpenedMergeRequest;
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

