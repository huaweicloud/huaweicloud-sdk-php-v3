<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseReviewVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseReviewVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  评审URI
    * testcaseName  用例名称
    * testcaseNumber  用例编号
    * testcaseStage  用例阶段
    * testcaseLastModified  用例修改时间
    * testcaseLastModifiedTimestamp  用例修改时间时间戳
    * testcaseUri  分支用例URI
    * versionUri  版本URI
    * versionName  版本名称
    * comment  评审意见
    * closeComment  闭环意见
    * reviewer  评审人
    * creationDate  评审创建时间
    * creationDateTimestamp  评审创建时间时间戳
    * closeUserIds  指定的闭环人列表
    * actualClosePerson  实际闭环人
    * status  评审状态
    * closeDate  评审闭环时间
    * closeDateTimestamp  评审闭环时间时间戳
    * expectCloseDate  期望闭环时间
    * expectCloseDateTimestamp  期望闭环时间时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'testcaseName' => 'string',
            'testcaseNumber' => 'string',
            'testcaseStage' => 'string',
            'testcaseLastModified' => 'string',
            'testcaseLastModifiedTimestamp' => 'int',
            'testcaseUri' => 'string',
            'versionUri' => 'string',
            'versionName' => 'string',
            'comment' => 'string',
            'closeComment' => 'string',
            'reviewer' => 'string',
            'creationDate' => 'string',
            'creationDateTimestamp' => 'int',
            'closeUserIds' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo[]',
            'actualClosePerson' => 'string',
            'status' => 'string',
            'closeDate' => 'string',
            'closeDateTimestamp' => 'int',
            'expectCloseDate' => 'string',
            'expectCloseDateTimestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  评审URI
    * testcaseName  用例名称
    * testcaseNumber  用例编号
    * testcaseStage  用例阶段
    * testcaseLastModified  用例修改时间
    * testcaseLastModifiedTimestamp  用例修改时间时间戳
    * testcaseUri  分支用例URI
    * versionUri  版本URI
    * versionName  版本名称
    * comment  评审意见
    * closeComment  闭环意见
    * reviewer  评审人
    * creationDate  评审创建时间
    * creationDateTimestamp  评审创建时间时间戳
    * closeUserIds  指定的闭环人列表
    * actualClosePerson  实际闭环人
    * status  评审状态
    * closeDate  评审闭环时间
    * closeDateTimestamp  评审闭环时间时间戳
    * expectCloseDate  期望闭环时间
    * expectCloseDateTimestamp  期望闭环时间时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'testcaseName' => null,
        'testcaseNumber' => null,
        'testcaseStage' => null,
        'testcaseLastModified' => null,
        'testcaseLastModifiedTimestamp' => 'int64',
        'testcaseUri' => null,
        'versionUri' => null,
        'versionName' => null,
        'comment' => null,
        'closeComment' => null,
        'reviewer' => null,
        'creationDate' => null,
        'creationDateTimestamp' => 'int64',
        'closeUserIds' => null,
        'actualClosePerson' => null,
        'status' => null,
        'closeDate' => null,
        'closeDateTimestamp' => 'int64',
        'expectCloseDate' => null,
        'expectCloseDateTimestamp' => 'int64'
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
    * uri  评审URI
    * testcaseName  用例名称
    * testcaseNumber  用例编号
    * testcaseStage  用例阶段
    * testcaseLastModified  用例修改时间
    * testcaseLastModifiedTimestamp  用例修改时间时间戳
    * testcaseUri  分支用例URI
    * versionUri  版本URI
    * versionName  版本名称
    * comment  评审意见
    * closeComment  闭环意见
    * reviewer  评审人
    * creationDate  评审创建时间
    * creationDateTimestamp  评审创建时间时间戳
    * closeUserIds  指定的闭环人列表
    * actualClosePerson  实际闭环人
    * status  评审状态
    * closeDate  评审闭环时间
    * closeDateTimestamp  评审闭环时间时间戳
    * expectCloseDate  期望闭环时间
    * expectCloseDateTimestamp  期望闭环时间时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'testcaseName' => 'testcase_name',
            'testcaseNumber' => 'testcase_number',
            'testcaseStage' => 'testcase_stage',
            'testcaseLastModified' => 'testcase_last_modified',
            'testcaseLastModifiedTimestamp' => 'testcase_last_modified_timestamp',
            'testcaseUri' => 'testcase_uri',
            'versionUri' => 'version_uri',
            'versionName' => 'version_name',
            'comment' => 'comment',
            'closeComment' => 'close_comment',
            'reviewer' => 'reviewer',
            'creationDate' => 'creation_date',
            'creationDateTimestamp' => 'creation_date_timestamp',
            'closeUserIds' => 'close_user_ids',
            'actualClosePerson' => 'actual_close_person',
            'status' => 'status',
            'closeDate' => 'close_date',
            'closeDateTimestamp' => 'close_date_timestamp',
            'expectCloseDate' => 'expect_close_date',
            'expectCloseDateTimestamp' => 'expect_close_date_timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  评审URI
    * testcaseName  用例名称
    * testcaseNumber  用例编号
    * testcaseStage  用例阶段
    * testcaseLastModified  用例修改时间
    * testcaseLastModifiedTimestamp  用例修改时间时间戳
    * testcaseUri  分支用例URI
    * versionUri  版本URI
    * versionName  版本名称
    * comment  评审意见
    * closeComment  闭环意见
    * reviewer  评审人
    * creationDate  评审创建时间
    * creationDateTimestamp  评审创建时间时间戳
    * closeUserIds  指定的闭环人列表
    * actualClosePerson  实际闭环人
    * status  评审状态
    * closeDate  评审闭环时间
    * closeDateTimestamp  评审闭环时间时间戳
    * expectCloseDate  期望闭环时间
    * expectCloseDateTimestamp  期望闭环时间时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'testcaseName' => 'setTestcaseName',
            'testcaseNumber' => 'setTestcaseNumber',
            'testcaseStage' => 'setTestcaseStage',
            'testcaseLastModified' => 'setTestcaseLastModified',
            'testcaseLastModifiedTimestamp' => 'setTestcaseLastModifiedTimestamp',
            'testcaseUri' => 'setTestcaseUri',
            'versionUri' => 'setVersionUri',
            'versionName' => 'setVersionName',
            'comment' => 'setComment',
            'closeComment' => 'setCloseComment',
            'reviewer' => 'setReviewer',
            'creationDate' => 'setCreationDate',
            'creationDateTimestamp' => 'setCreationDateTimestamp',
            'closeUserIds' => 'setCloseUserIds',
            'actualClosePerson' => 'setActualClosePerson',
            'status' => 'setStatus',
            'closeDate' => 'setCloseDate',
            'closeDateTimestamp' => 'setCloseDateTimestamp',
            'expectCloseDate' => 'setExpectCloseDate',
            'expectCloseDateTimestamp' => 'setExpectCloseDateTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  评审URI
    * testcaseName  用例名称
    * testcaseNumber  用例编号
    * testcaseStage  用例阶段
    * testcaseLastModified  用例修改时间
    * testcaseLastModifiedTimestamp  用例修改时间时间戳
    * testcaseUri  分支用例URI
    * versionUri  版本URI
    * versionName  版本名称
    * comment  评审意见
    * closeComment  闭环意见
    * reviewer  评审人
    * creationDate  评审创建时间
    * creationDateTimestamp  评审创建时间时间戳
    * closeUserIds  指定的闭环人列表
    * actualClosePerson  实际闭环人
    * status  评审状态
    * closeDate  评审闭环时间
    * closeDateTimestamp  评审闭环时间时间戳
    * expectCloseDate  期望闭环时间
    * expectCloseDateTimestamp  期望闭环时间时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'testcaseName' => 'getTestcaseName',
            'testcaseNumber' => 'getTestcaseNumber',
            'testcaseStage' => 'getTestcaseStage',
            'testcaseLastModified' => 'getTestcaseLastModified',
            'testcaseLastModifiedTimestamp' => 'getTestcaseLastModifiedTimestamp',
            'testcaseUri' => 'getTestcaseUri',
            'versionUri' => 'getVersionUri',
            'versionName' => 'getVersionName',
            'comment' => 'getComment',
            'closeComment' => 'getCloseComment',
            'reviewer' => 'getReviewer',
            'creationDate' => 'getCreationDate',
            'creationDateTimestamp' => 'getCreationDateTimestamp',
            'closeUserIds' => 'getCloseUserIds',
            'actualClosePerson' => 'getActualClosePerson',
            'status' => 'getStatus',
            'closeDate' => 'getCloseDate',
            'closeDateTimestamp' => 'getCloseDateTimestamp',
            'expectCloseDate' => 'getExpectCloseDate',
            'expectCloseDateTimestamp' => 'getExpectCloseDateTimestamp'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['testcaseName'] = isset($data['testcaseName']) ? $data['testcaseName'] : null;
        $this->container['testcaseNumber'] = isset($data['testcaseNumber']) ? $data['testcaseNumber'] : null;
        $this->container['testcaseStage'] = isset($data['testcaseStage']) ? $data['testcaseStage'] : null;
        $this->container['testcaseLastModified'] = isset($data['testcaseLastModified']) ? $data['testcaseLastModified'] : null;
        $this->container['testcaseLastModifiedTimestamp'] = isset($data['testcaseLastModifiedTimestamp']) ? $data['testcaseLastModifiedTimestamp'] : null;
        $this->container['testcaseUri'] = isset($data['testcaseUri']) ? $data['testcaseUri'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['closeComment'] = isset($data['closeComment']) ? $data['closeComment'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['creationDateTimestamp'] = isset($data['creationDateTimestamp']) ? $data['creationDateTimestamp'] : null;
        $this->container['closeUserIds'] = isset($data['closeUserIds']) ? $data['closeUserIds'] : null;
        $this->container['actualClosePerson'] = isset($data['actualClosePerson']) ? $data['actualClosePerson'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['closeDate'] = isset($data['closeDate']) ? $data['closeDate'] : null;
        $this->container['closeDateTimestamp'] = isset($data['closeDateTimestamp']) ? $data['closeDateTimestamp'] : null;
        $this->container['expectCloseDate'] = isset($data['expectCloseDate']) ? $data['expectCloseDate'] : null;
        $this->container['expectCloseDateTimestamp'] = isset($data['expectCloseDateTimestamp']) ? $data['expectCloseDateTimestamp'] : null;
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
    * Gets uri
    *  评审URI
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 评审URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets testcaseName
    *  用例名称
    *
    * @return string|null
    */
    public function getTestcaseName()
    {
        return $this->container['testcaseName'];
    }

    /**
    * Sets testcaseName
    *
    * @param string|null $testcaseName 用例名称
    *
    * @return $this
    */
    public function setTestcaseName($testcaseName)
    {
        $this->container['testcaseName'] = $testcaseName;
        return $this;
    }

    /**
    * Gets testcaseNumber
    *  用例编号
    *
    * @return string|null
    */
    public function getTestcaseNumber()
    {
        return $this->container['testcaseNumber'];
    }

    /**
    * Sets testcaseNumber
    *
    * @param string|null $testcaseNumber 用例编号
    *
    * @return $this
    */
    public function setTestcaseNumber($testcaseNumber)
    {
        $this->container['testcaseNumber'] = $testcaseNumber;
        return $this;
    }

    /**
    * Gets testcaseStage
    *  用例阶段
    *
    * @return string|null
    */
    public function getTestcaseStage()
    {
        return $this->container['testcaseStage'];
    }

    /**
    * Sets testcaseStage
    *
    * @param string|null $testcaseStage 用例阶段
    *
    * @return $this
    */
    public function setTestcaseStage($testcaseStage)
    {
        $this->container['testcaseStage'] = $testcaseStage;
        return $this;
    }

    /**
    * Gets testcaseLastModified
    *  用例修改时间
    *
    * @return string|null
    */
    public function getTestcaseLastModified()
    {
        return $this->container['testcaseLastModified'];
    }

    /**
    * Sets testcaseLastModified
    *
    * @param string|null $testcaseLastModified 用例修改时间
    *
    * @return $this
    */
    public function setTestcaseLastModified($testcaseLastModified)
    {
        $this->container['testcaseLastModified'] = $testcaseLastModified;
        return $this;
    }

    /**
    * Gets testcaseLastModifiedTimestamp
    *  用例修改时间时间戳
    *
    * @return int|null
    */
    public function getTestcaseLastModifiedTimestamp()
    {
        return $this->container['testcaseLastModifiedTimestamp'];
    }

    /**
    * Sets testcaseLastModifiedTimestamp
    *
    * @param int|null $testcaseLastModifiedTimestamp 用例修改时间时间戳
    *
    * @return $this
    */
    public function setTestcaseLastModifiedTimestamp($testcaseLastModifiedTimestamp)
    {
        $this->container['testcaseLastModifiedTimestamp'] = $testcaseLastModifiedTimestamp;
        return $this;
    }

    /**
    * Gets testcaseUri
    *  分支用例URI
    *
    * @return string|null
    */
    public function getTestcaseUri()
    {
        return $this->container['testcaseUri'];
    }

    /**
    * Sets testcaseUri
    *
    * @param string|null $testcaseUri 分支用例URI
    *
    * @return $this
    */
    public function setTestcaseUri($testcaseUri)
    {
        $this->container['testcaseUri'] = $testcaseUri;
        return $this;
    }

    /**
    * Gets versionUri
    *  版本URI
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 版本URI
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets versionName
    *  版本名称
    *
    * @return string|null
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string|null $versionName 版本名称
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets comment
    *  评审意见
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 评审意见
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets closeComment
    *  闭环意见
    *
    * @return string|null
    */
    public function getCloseComment()
    {
        return $this->container['closeComment'];
    }

    /**
    * Sets closeComment
    *
    * @param string|null $closeComment 闭环意见
    *
    * @return $this
    */
    public function setCloseComment($closeComment)
    {
        $this->container['closeComment'] = $closeComment;
        return $this;
    }

    /**
    * Gets reviewer
    *  评审人
    *
    * @return string|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param string|null $reviewer 评审人
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets creationDate
    *  评审创建时间
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 评审创建时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets creationDateTimestamp
    *  评审创建时间时间戳
    *
    * @return int|null
    */
    public function getCreationDateTimestamp()
    {
        return $this->container['creationDateTimestamp'];
    }

    /**
    * Sets creationDateTimestamp
    *
    * @param int|null $creationDateTimestamp 评审创建时间时间戳
    *
    * @return $this
    */
    public function setCreationDateTimestamp($creationDateTimestamp)
    {
        $this->container['creationDateTimestamp'] = $creationDateTimestamp;
        return $this;
    }

    /**
    * Gets closeUserIds
    *  指定的闭环人列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo[]|null
    */
    public function getCloseUserIds()
    {
        return $this->container['closeUserIds'];
    }

    /**
    * Sets closeUserIds
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo[]|null $closeUserIds 指定的闭环人列表
    *
    * @return $this
    */
    public function setCloseUserIds($closeUserIds)
    {
        $this->container['closeUserIds'] = $closeUserIds;
        return $this;
    }

    /**
    * Gets actualClosePerson
    *  实际闭环人
    *
    * @return string|null
    */
    public function getActualClosePerson()
    {
        return $this->container['actualClosePerson'];
    }

    /**
    * Sets actualClosePerson
    *
    * @param string|null $actualClosePerson 实际闭环人
    *
    * @return $this
    */
    public function setActualClosePerson($actualClosePerson)
    {
        $this->container['actualClosePerson'] = $actualClosePerson;
        return $this;
    }

    /**
    * Gets status
    *  评审状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 评审状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets closeDate
    *  评审闭环时间
    *
    * @return string|null
    */
    public function getCloseDate()
    {
        return $this->container['closeDate'];
    }

    /**
    * Sets closeDate
    *
    * @param string|null $closeDate 评审闭环时间
    *
    * @return $this
    */
    public function setCloseDate($closeDate)
    {
        $this->container['closeDate'] = $closeDate;
        return $this;
    }

    /**
    * Gets closeDateTimestamp
    *  评审闭环时间时间戳
    *
    * @return int|null
    */
    public function getCloseDateTimestamp()
    {
        return $this->container['closeDateTimestamp'];
    }

    /**
    * Sets closeDateTimestamp
    *
    * @param int|null $closeDateTimestamp 评审闭环时间时间戳
    *
    * @return $this
    */
    public function setCloseDateTimestamp($closeDateTimestamp)
    {
        $this->container['closeDateTimestamp'] = $closeDateTimestamp;
        return $this;
    }

    /**
    * Gets expectCloseDate
    *  期望闭环时间
    *
    * @return string|null
    */
    public function getExpectCloseDate()
    {
        return $this->container['expectCloseDate'];
    }

    /**
    * Sets expectCloseDate
    *
    * @param string|null $expectCloseDate 期望闭环时间
    *
    * @return $this
    */
    public function setExpectCloseDate($expectCloseDate)
    {
        $this->container['expectCloseDate'] = $expectCloseDate;
        return $this;
    }

    /**
    * Gets expectCloseDateTimestamp
    *  期望闭环时间时间戳
    *
    * @return int|null
    */
    public function getExpectCloseDateTimestamp()
    {
        return $this->container['expectCloseDateTimestamp'];
    }

    /**
    * Sets expectCloseDateTimestamp
    *
    * @param int|null $expectCloseDateTimestamp 期望闭环时间时间戳
    *
    * @return $this
    */
    public function setExpectCloseDateTimestamp($expectCloseDateTimestamp)
    {
        $this->container['expectCloseDateTimestamp'] = $expectCloseDateTimestamp;
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

