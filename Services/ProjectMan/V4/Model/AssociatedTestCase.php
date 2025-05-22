<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatedTestCase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatedTestCase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseId  用例ID
    * caseNum  用例编号
    * caseName  用例名称
    * caseLevel  用例等级
    * status  status
    * creator  creator
    * owner  owner
    * project  project
    * isBaseLine  是否基线
    * type  用例类型
    * createdTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseId' => 'string',
            'caseNum' => 'string',
            'caseName' => 'string',
            'caseLevel' => 'string',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVo',
            'creator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser',
            'owner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleProject',
            'isBaseLine' => 'int',
            'type' => 'string',
            'createdTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseId  用例ID
    * caseNum  用例编号
    * caseName  用例名称
    * caseLevel  用例等级
    * status  status
    * creator  creator
    * owner  owner
    * project  project
    * isBaseLine  是否基线
    * type  用例类型
    * createdTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseId' => null,
        'caseNum' => null,
        'caseName' => null,
        'caseLevel' => null,
        'status' => null,
        'creator' => null,
        'owner' => null,
        'project' => null,
        'isBaseLine' => 'int32',
        'type' => null,
        'createdTime' => 'int64'
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
    * caseId  用例ID
    * caseNum  用例编号
    * caseName  用例名称
    * caseLevel  用例等级
    * status  status
    * creator  creator
    * owner  owner
    * project  project
    * isBaseLine  是否基线
    * type  用例类型
    * createdTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseId' => 'case_id',
            'caseNum' => 'case_num',
            'caseName' => 'case_name',
            'caseLevel' => 'case_level',
            'status' => 'status',
            'creator' => 'creator',
            'owner' => 'owner',
            'project' => 'project',
            'isBaseLine' => 'is_base_line',
            'type' => 'type',
            'createdTime' => 'created_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseId  用例ID
    * caseNum  用例编号
    * caseName  用例名称
    * caseLevel  用例等级
    * status  status
    * creator  creator
    * owner  owner
    * project  project
    * isBaseLine  是否基线
    * type  用例类型
    * createdTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'caseId' => 'setCaseId',
            'caseNum' => 'setCaseNum',
            'caseName' => 'setCaseName',
            'caseLevel' => 'setCaseLevel',
            'status' => 'setStatus',
            'creator' => 'setCreator',
            'owner' => 'setOwner',
            'project' => 'setProject',
            'isBaseLine' => 'setIsBaseLine',
            'type' => 'setType',
            'createdTime' => 'setCreatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseId  用例ID
    * caseNum  用例编号
    * caseName  用例名称
    * caseLevel  用例等级
    * status  status
    * creator  creator
    * owner  owner
    * project  project
    * isBaseLine  是否基线
    * type  用例类型
    * createdTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'caseId' => 'getCaseId',
            'caseNum' => 'getCaseNum',
            'caseName' => 'getCaseName',
            'caseLevel' => 'getCaseLevel',
            'status' => 'getStatus',
            'creator' => 'getCreator',
            'owner' => 'getOwner',
            'project' => 'getProject',
            'isBaseLine' => 'getIsBaseLine',
            'type' => 'getType',
            'createdTime' => 'getCreatedTime'
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
        $this->container['caseId'] = isset($data['caseId']) ? $data['caseId'] : null;
        $this->container['caseNum'] = isset($data['caseNum']) ? $data['caseNum'] : null;
        $this->container['caseName'] = isset($data['caseName']) ? $data['caseName'] : null;
        $this->container['caseLevel'] = isset($data['caseLevel']) ? $data['caseLevel'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['isBaseLine'] = isset($data['isBaseLine']) ? $data['isBaseLine'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
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
    * Gets caseId
    *  用例ID
    *
    * @return string|null
    */
    public function getCaseId()
    {
        return $this->container['caseId'];
    }

    /**
    * Sets caseId
    *
    * @param string|null $caseId 用例ID
    *
    * @return $this
    */
    public function setCaseId($caseId)
    {
        $this->container['caseId'] = $caseId;
        return $this;
    }

    /**
    * Gets caseNum
    *  用例编号
    *
    * @return string|null
    */
    public function getCaseNum()
    {
        return $this->container['caseNum'];
    }

    /**
    * Sets caseNum
    *
    * @param string|null $caseNum 用例编号
    *
    * @return $this
    */
    public function setCaseNum($caseNum)
    {
        $this->container['caseNum'] = $caseNum;
        return $this;
    }

    /**
    * Gets caseName
    *  用例名称
    *
    * @return string|null
    */
    public function getCaseName()
    {
        return $this->container['caseName'];
    }

    /**
    * Sets caseName
    *
    * @param string|null $caseName 用例名称
    *
    * @return $this
    */
    public function setCaseName($caseName)
    {
        $this->container['caseName'] = $caseName;
        return $this;
    }

    /**
    * Gets caseLevel
    *  用例等级
    *
    * @return string|null
    */
    public function getCaseLevel()
    {
        return $this->container['caseLevel'];
    }

    /**
    * Sets caseLevel
    *
    * @param string|null $caseLevel 用例等级
    *
    * @return $this
    */
    public function setCaseLevel($caseLevel)
    {
        $this->container['caseLevel'] = $caseLevel;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVo|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusVo|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleProject|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleProject|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets isBaseLine
    *  是否基线
    *
    * @return int|null
    */
    public function getIsBaseLine()
    {
        return $this->container['isBaseLine'];
    }

    /**
    * Sets isBaseLine
    *
    * @param int|null $isBaseLine 是否基线
    *
    * @return $this
    */
    public function setIsBaseLine($isBaseLine)
    {
        $this->container['isBaseLine'] = $isBaseLine;
        return $this;
    }

    /**
    * Gets type
    *  用例类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 用例类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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

