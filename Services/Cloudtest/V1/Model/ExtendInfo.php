<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * author  author
    * updator  updator
    * domain  domain
    * description  描述信息
    * preparation  前置条件
    * steps  测试步骤，数组长度小于10
    * labelList  标签信息
    * defectList  缺陷信息
    * module  module
    * issue  issue
    * testVersionId  测试版本号
    * fixedVersion  fixedVersion
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'author' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendAuthorInfo',
            'updator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendAuthorInfo',
            'domain' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo',
            'description' => 'string',
            'preparation' => 'string',
            'steps' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseStep[]',
            'labelList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo[]',
            'defectList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo[]',
            'module' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo',
            'issue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo',
            'testVersionId' => 'string',
            'fixedVersion' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * author  author
    * updator  updator
    * domain  domain
    * description  描述信息
    * preparation  前置条件
    * steps  测试步骤，数组长度小于10
    * labelList  标签信息
    * defectList  缺陷信息
    * module  module
    * issue  issue
    * testVersionId  测试版本号
    * fixedVersion  fixedVersion
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'author' => null,
        'updator' => null,
        'domain' => null,
        'description' => null,
        'preparation' => null,
        'steps' => null,
        'labelList' => null,
        'defectList' => null,
        'module' => null,
        'issue' => null,
        'testVersionId' => null,
        'fixedVersion' => null
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
    * author  author
    * updator  updator
    * domain  domain
    * description  描述信息
    * preparation  前置条件
    * steps  测试步骤，数组长度小于10
    * labelList  标签信息
    * defectList  缺陷信息
    * module  module
    * issue  issue
    * testVersionId  测试版本号
    * fixedVersion  fixedVersion
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'author' => 'author',
            'updator' => 'updator',
            'domain' => 'domain',
            'description' => 'description',
            'preparation' => 'preparation',
            'steps' => 'steps',
            'labelList' => 'label_list',
            'defectList' => 'defect_list',
            'module' => 'module',
            'issue' => 'issue',
            'testVersionId' => 'test_version_id',
            'fixedVersion' => 'fixed_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * author  author
    * updator  updator
    * domain  domain
    * description  描述信息
    * preparation  前置条件
    * steps  测试步骤，数组长度小于10
    * labelList  标签信息
    * defectList  缺陷信息
    * module  module
    * issue  issue
    * testVersionId  测试版本号
    * fixedVersion  fixedVersion
    *
    * @var string[]
    */
    protected static $setters = [
            'author' => 'setAuthor',
            'updator' => 'setUpdator',
            'domain' => 'setDomain',
            'description' => 'setDescription',
            'preparation' => 'setPreparation',
            'steps' => 'setSteps',
            'labelList' => 'setLabelList',
            'defectList' => 'setDefectList',
            'module' => 'setModule',
            'issue' => 'setIssue',
            'testVersionId' => 'setTestVersionId',
            'fixedVersion' => 'setFixedVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * author  author
    * updator  updator
    * domain  domain
    * description  描述信息
    * preparation  前置条件
    * steps  测试步骤，数组长度小于10
    * labelList  标签信息
    * defectList  缺陷信息
    * module  module
    * issue  issue
    * testVersionId  测试版本号
    * fixedVersion  fixedVersion
    *
    * @var string[]
    */
    protected static $getters = [
            'author' => 'getAuthor',
            'updator' => 'getUpdator',
            'domain' => 'getDomain',
            'description' => 'getDescription',
            'preparation' => 'getPreparation',
            'steps' => 'getSteps',
            'labelList' => 'getLabelList',
            'defectList' => 'getDefectList',
            'module' => 'getModule',
            'issue' => 'getIssue',
            'testVersionId' => 'getTestVersionId',
            'fixedVersion' => 'getFixedVersion'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['preparation'] = isset($data['preparation']) ? $data['preparation'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['defectList'] = isset($data['defectList']) ? $data['defectList'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['testVersionId'] = isset($data['testVersionId']) ? $data['testVersionId'] : null;
        $this->container['fixedVersion'] = isset($data['fixedVersion']) ? $data['fixedVersion'] : null;
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
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendAuthorInfo|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendAuthorInfo|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets updator
    *  updator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendAuthorInfo|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtendAuthorInfo|null $updator updator
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets preparation
    *  前置条件
    *
    * @return string|null
    */
    public function getPreparation()
    {
        return $this->container['preparation'];
    }

    /**
    * Sets preparation
    *
    * @param string|null $preparation 前置条件
    *
    * @return $this
    */
    public function setPreparation($preparation)
    {
        $this->container['preparation'] = $preparation;
        return $this;
    }

    /**
    * Gets steps
    *  测试步骤，数组长度小于10
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseStep[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseStep[]|null $steps 测试步骤，数组长度小于10
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets labelList
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo[]|null
    */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
    * Sets labelList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo[]|null $labelList 标签信息
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets defectList
    *  缺陷信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo[]|null
    */
    public function getDefectList()
    {
        return $this->container['defectList'];
    }

    /**
    * Sets defectList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo[]|null $defectList 缺陷信息
    *
    * @return $this
    */
    public function setDefectList($defectList)
    {
        $this->container['defectList'] = $defectList;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets issue
    *  issue
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null
    */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
    * Sets issue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null $issue issue
    *
    * @return $this
    */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;
        return $this;
    }

    /**
    * Gets testVersionId
    *  测试版本号
    *
    * @return string|null
    */
    public function getTestVersionId()
    {
        return $this->container['testVersionId'];
    }

    /**
    * Sets testVersionId
    *
    * @param string|null $testVersionId 测试版本号
    *
    * @return $this
    */
    public function setTestVersionId($testVersionId)
    {
        $this->container['testVersionId'] = $testVersionId;
        return $this;
    }

    /**
    * Gets fixedVersion
    *  fixedVersion
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null
    */
    public function getFixedVersion()
    {
        return $this->container['fixedVersion'];
    }

    /**
    * Sets fixedVersion
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AssignedUserInfo|null $fixedVersion fixedVersion
    *
    * @return $this
    */
    public function setFixedVersion($fixedVersion)
    {
        $this->container['fixedVersion'] = $fixedVersion;
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

