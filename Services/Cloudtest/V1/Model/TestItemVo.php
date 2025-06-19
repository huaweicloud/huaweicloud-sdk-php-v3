<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestItemVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestItemVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * owner  责任人
    * frequence  frequence值
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * isFeature  是否特性
    * relateHtsm  是否关联特性
    * awUniqueId  aw id
    * testMindId  脑图id
    * testMindUrl  脑图url
    * projectUuid  项目id
    * caseTotal  用例总数
    * execdTotal  执行总数
    * isDirectRelation  is_direct_relation
    * hasChild  是否有子特性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'type' => 'string',
            'author' => 'string',
            'name' => 'string',
            'rank' => 'int',
            'owner' => 'string',
            'frequence' => 'string',
            'region' => 'string',
            'lastModifier' => 'string',
            'lastModified' => '\DateTime',
            'lastModifiedTimestamp' => 'int',
            'lastChangeTime' => '\DateTime',
            'versionUri' => 'string',
            'originUri' => 'string',
            'parentUri' => 'string',
            'parentPath' => 'string',
            'creationVersionUri' => 'string',
            'creationDate' => '\DateTime',
            'creationDateTimestamp' => 'int',
            'authorName' => 'string',
            'comment' => 'string',
            'number' => 'string',
            'isFeature' => 'string',
            'relateHtsm' => 'string',
            'awUniqueId' => 'string',
            'testMindId' => 'string',
            'testMindUrl' => 'string',
            'projectUuid' => 'string',
            'caseTotal' => 'int',
            'execdTotal' => 'int',
            'isDirectRelation' => 'bool',
            'hasChild' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * owner  责任人
    * frequence  frequence值
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * isFeature  是否特性
    * relateHtsm  是否关联特性
    * awUniqueId  aw id
    * testMindId  脑图id
    * testMindUrl  脑图url
    * projectUuid  项目id
    * caseTotal  用例总数
    * execdTotal  执行总数
    * isDirectRelation  is_direct_relation
    * hasChild  是否有子特性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'type' => null,
        'author' => null,
        'name' => null,
        'rank' => 'int32',
        'owner' => null,
        'frequence' => null,
        'region' => null,
        'lastModifier' => null,
        'lastModified' => 'date-time',
        'lastModifiedTimestamp' => 'int64',
        'lastChangeTime' => 'date-time',
        'versionUri' => null,
        'originUri' => null,
        'parentUri' => null,
        'parentPath' => null,
        'creationVersionUri' => null,
        'creationDate' => 'date-time',
        'creationDateTimestamp' => 'int64',
        'authorName' => null,
        'comment' => null,
        'number' => null,
        'isFeature' => null,
        'relateHtsm' => null,
        'awUniqueId' => null,
        'testMindId' => null,
        'testMindUrl' => null,
        'projectUuid' => null,
        'caseTotal' => 'int32',
        'execdTotal' => 'int32',
        'isDirectRelation' => null,
        'hasChild' => null
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
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * owner  责任人
    * frequence  frequence值
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * isFeature  是否特性
    * relateHtsm  是否关联特性
    * awUniqueId  aw id
    * testMindId  脑图id
    * testMindUrl  脑图url
    * projectUuid  项目id
    * caseTotal  用例总数
    * execdTotal  执行总数
    * isDirectRelation  is_direct_relation
    * hasChild  是否有子特性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'type' => 'type',
            'author' => 'author',
            'name' => 'name',
            'rank' => 'rank',
            'owner' => 'owner',
            'frequence' => 'frequence',
            'region' => 'region',
            'lastModifier' => 'last_modifier',
            'lastModified' => 'last_modified',
            'lastModifiedTimestamp' => 'last_modified_timestamp',
            'lastChangeTime' => 'last_change_time',
            'versionUri' => 'version_uri',
            'originUri' => 'origin_uri',
            'parentUri' => 'parent_uri',
            'parentPath' => 'parent_path',
            'creationVersionUri' => 'creation_version_uri',
            'creationDate' => 'creation_date',
            'creationDateTimestamp' => 'creation_date_timestamp',
            'authorName' => 'author_name',
            'comment' => 'comment',
            'number' => 'number',
            'isFeature' => 'is_feature',
            'relateHtsm' => 'relate_htsm',
            'awUniqueId' => 'aw_unique_id',
            'testMindId' => 'test_mind_id',
            'testMindUrl' => 'test_mind_url',
            'projectUuid' => 'project_uuid',
            'caseTotal' => 'case_total',
            'execdTotal' => 'execd_total',
            'isDirectRelation' => 'is_direct_relation',
            'hasChild' => 'has_child'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * owner  责任人
    * frequence  frequence值
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * isFeature  是否特性
    * relateHtsm  是否关联特性
    * awUniqueId  aw id
    * testMindId  脑图id
    * testMindUrl  脑图url
    * projectUuid  项目id
    * caseTotal  用例总数
    * execdTotal  执行总数
    * isDirectRelation  is_direct_relation
    * hasChild  是否有子特性
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'type' => 'setType',
            'author' => 'setAuthor',
            'name' => 'setName',
            'rank' => 'setRank',
            'owner' => 'setOwner',
            'frequence' => 'setFrequence',
            'region' => 'setRegion',
            'lastModifier' => 'setLastModifier',
            'lastModified' => 'setLastModified',
            'lastModifiedTimestamp' => 'setLastModifiedTimestamp',
            'lastChangeTime' => 'setLastChangeTime',
            'versionUri' => 'setVersionUri',
            'originUri' => 'setOriginUri',
            'parentUri' => 'setParentUri',
            'parentPath' => 'setParentPath',
            'creationVersionUri' => 'setCreationVersionUri',
            'creationDate' => 'setCreationDate',
            'creationDateTimestamp' => 'setCreationDateTimestamp',
            'authorName' => 'setAuthorName',
            'comment' => 'setComment',
            'number' => 'setNumber',
            'isFeature' => 'setIsFeature',
            'relateHtsm' => 'setRelateHtsm',
            'awUniqueId' => 'setAwUniqueId',
            'testMindId' => 'setTestMindId',
            'testMindUrl' => 'setTestMindUrl',
            'projectUuid' => 'setProjectUuid',
            'caseTotal' => 'setCaseTotal',
            'execdTotal' => 'setExecdTotal',
            'isDirectRelation' => 'setIsDirectRelation',
            'hasChild' => 'setHasChild'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  资源URI
    * type  资源类型
    * author  创建人
    * name  名称
    * rank  级别
    * owner  责任人
    * frequence  frequence值
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * lastChangeTime  最后变更时间
    * versionUri  版本URI
    * originUri  源资源URI
    * parentUri  父资源URI
    * parentPath  父资源路径
    * creationVersionUri  创建版本URI
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * comment  备注
    * number  编号
    * isFeature  是否特性
    * relateHtsm  是否关联特性
    * awUniqueId  aw id
    * testMindId  脑图id
    * testMindUrl  脑图url
    * projectUuid  项目id
    * caseTotal  用例总数
    * execdTotal  执行总数
    * isDirectRelation  is_direct_relation
    * hasChild  是否有子特性
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'type' => 'getType',
            'author' => 'getAuthor',
            'name' => 'getName',
            'rank' => 'getRank',
            'owner' => 'getOwner',
            'frequence' => 'getFrequence',
            'region' => 'getRegion',
            'lastModifier' => 'getLastModifier',
            'lastModified' => 'getLastModified',
            'lastModifiedTimestamp' => 'getLastModifiedTimestamp',
            'lastChangeTime' => 'getLastChangeTime',
            'versionUri' => 'getVersionUri',
            'originUri' => 'getOriginUri',
            'parentUri' => 'getParentUri',
            'parentPath' => 'getParentPath',
            'creationVersionUri' => 'getCreationVersionUri',
            'creationDate' => 'getCreationDate',
            'creationDateTimestamp' => 'getCreationDateTimestamp',
            'authorName' => 'getAuthorName',
            'comment' => 'getComment',
            'number' => 'getNumber',
            'isFeature' => 'getIsFeature',
            'relateHtsm' => 'getRelateHtsm',
            'awUniqueId' => 'getAwUniqueId',
            'testMindId' => 'getTestMindId',
            'testMindUrl' => 'getTestMindUrl',
            'projectUuid' => 'getProjectUuid',
            'caseTotal' => 'getCaseTotal',
            'execdTotal' => 'getExecdTotal',
            'isDirectRelation' => 'getIsDirectRelation',
            'hasChild' => 'getHasChild'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['frequence'] = isset($data['frequence']) ? $data['frequence'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['lastModifier'] = isset($data['lastModifier']) ? $data['lastModifier'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['lastModifiedTimestamp'] = isset($data['lastModifiedTimestamp']) ? $data['lastModifiedTimestamp'] : null;
        $this->container['lastChangeTime'] = isset($data['lastChangeTime']) ? $data['lastChangeTime'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['originUri'] = isset($data['originUri']) ? $data['originUri'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['parentPath'] = isset($data['parentPath']) ? $data['parentPath'] : null;
        $this->container['creationVersionUri'] = isset($data['creationVersionUri']) ? $data['creationVersionUri'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['creationDateTimestamp'] = isset($data['creationDateTimestamp']) ? $data['creationDateTimestamp'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['isFeature'] = isset($data['isFeature']) ? $data['isFeature'] : null;
        $this->container['relateHtsm'] = isset($data['relateHtsm']) ? $data['relateHtsm'] : null;
        $this->container['awUniqueId'] = isset($data['awUniqueId']) ? $data['awUniqueId'] : null;
        $this->container['testMindId'] = isset($data['testMindId']) ? $data['testMindId'] : null;
        $this->container['testMindUrl'] = isset($data['testMindUrl']) ? $data['testMindUrl'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['caseTotal'] = isset($data['caseTotal']) ? $data['caseTotal'] : null;
        $this->container['execdTotal'] = isset($data['execdTotal']) ? $data['execdTotal'] : null;
        $this->container['isDirectRelation'] = isset($data['isDirectRelation']) ? $data['isDirectRelation'] : null;
        $this->container['hasChild'] = isset($data['hasChild']) ? $data['hasChild'] : null;
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
    *  资源URI
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
    * @param string|null $uri 资源URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets type
    *  资源类型
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
    * @param string|null $type 资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets author
    *  创建人
    *
    * @return string|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param string|null $author 创建人
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets rank
    *  级别
    *
    * @return int|null
    */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
    * Sets rank
    *
    * @param int|null $rank 级别
    *
    * @return $this
    */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;
        return $this;
    }

    /**
    * Gets owner
    *  责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets frequence
    *  frequence值
    *
    * @return string|null
    */
    public function getFrequence()
    {
        return $this->container['frequence'];
    }

    /**
    * Sets frequence
    *
    * @param string|null $frequence frequence值
    *
    * @return $this
    */
    public function setFrequence($frequence)
    {
        $this->container['frequence'] = $frequence;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets lastModifier
    *  最后修改人
    *
    * @return string|null
    */
    public function getLastModifier()
    {
        return $this->container['lastModifier'];
    }

    /**
    * Sets lastModifier
    *
    * @param string|null $lastModifier 最后修改人
    *
    * @return $this
    */
    public function setLastModifier($lastModifier)
    {
        $this->container['lastModifier'] = $lastModifier;
        return $this;
    }

    /**
    * Gets lastModified
    *  最后修改时间
    *
    * @return \DateTime|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param \DateTime|null $lastModified 最后修改时间
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets lastModifiedTimestamp
    *  修改时间时间戳
    *
    * @return int|null
    */
    public function getLastModifiedTimestamp()
    {
        return $this->container['lastModifiedTimestamp'];
    }

    /**
    * Sets lastModifiedTimestamp
    *
    * @param int|null $lastModifiedTimestamp 修改时间时间戳
    *
    * @return $this
    */
    public function setLastModifiedTimestamp($lastModifiedTimestamp)
    {
        $this->container['lastModifiedTimestamp'] = $lastModifiedTimestamp;
        return $this;
    }

    /**
    * Gets lastChangeTime
    *  最后变更时间
    *
    * @return \DateTime|null
    */
    public function getLastChangeTime()
    {
        return $this->container['lastChangeTime'];
    }

    /**
    * Sets lastChangeTime
    *
    * @param \DateTime|null $lastChangeTime 最后变更时间
    *
    * @return $this
    */
    public function setLastChangeTime($lastChangeTime)
    {
        $this->container['lastChangeTime'] = $lastChangeTime;
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
    * Gets originUri
    *  源资源URI
    *
    * @return string|null
    */
    public function getOriginUri()
    {
        return $this->container['originUri'];
    }

    /**
    * Sets originUri
    *
    * @param string|null $originUri 源资源URI
    *
    * @return $this
    */
    public function setOriginUri($originUri)
    {
        $this->container['originUri'] = $originUri;
        return $this;
    }

    /**
    * Gets parentUri
    *  父资源URI
    *
    * @return string|null
    */
    public function getParentUri()
    {
        return $this->container['parentUri'];
    }

    /**
    * Sets parentUri
    *
    * @param string|null $parentUri 父资源URI
    *
    * @return $this
    */
    public function setParentUri($parentUri)
    {
        $this->container['parentUri'] = $parentUri;
        return $this;
    }

    /**
    * Gets parentPath
    *  父资源路径
    *
    * @return string|null
    */
    public function getParentPath()
    {
        return $this->container['parentPath'];
    }

    /**
    * Sets parentPath
    *
    * @param string|null $parentPath 父资源路径
    *
    * @return $this
    */
    public function setParentPath($parentPath)
    {
        $this->container['parentPath'] = $parentPath;
        return $this;
    }

    /**
    * Gets creationVersionUri
    *  创建版本URI
    *
    * @return string|null
    */
    public function getCreationVersionUri()
    {
        return $this->container['creationVersionUri'];
    }

    /**
    * Sets creationVersionUri
    *
    * @param string|null $creationVersionUri 创建版本URI
    *
    * @return $this
    */
    public function setCreationVersionUri($creationVersionUri)
    {
        $this->container['creationVersionUri'] = $creationVersionUri;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param \DateTime|null $creationDate 创建时间
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
    *  创建时间时间戳
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
    * @param int|null $creationDateTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreationDateTimestamp($creationDateTimestamp)
    {
        $this->container['creationDateTimestamp'] = $creationDateTimestamp;
        return $this;
    }

    /**
    * Gets authorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName 创建人名称
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets comment
    *  备注
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
    * @param string|null $comment 备注
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets number
    *  编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets isFeature
    *  是否特性
    *
    * @return string|null
    */
    public function getIsFeature()
    {
        return $this->container['isFeature'];
    }

    /**
    * Sets isFeature
    *
    * @param string|null $isFeature 是否特性
    *
    * @return $this
    */
    public function setIsFeature($isFeature)
    {
        $this->container['isFeature'] = $isFeature;
        return $this;
    }

    /**
    * Gets relateHtsm
    *  是否关联特性
    *
    * @return string|null
    */
    public function getRelateHtsm()
    {
        return $this->container['relateHtsm'];
    }

    /**
    * Sets relateHtsm
    *
    * @param string|null $relateHtsm 是否关联特性
    *
    * @return $this
    */
    public function setRelateHtsm($relateHtsm)
    {
        $this->container['relateHtsm'] = $relateHtsm;
        return $this;
    }

    /**
    * Gets awUniqueId
    *  aw id
    *
    * @return string|null
    */
    public function getAwUniqueId()
    {
        return $this->container['awUniqueId'];
    }

    /**
    * Sets awUniqueId
    *
    * @param string|null $awUniqueId aw id
    *
    * @return $this
    */
    public function setAwUniqueId($awUniqueId)
    {
        $this->container['awUniqueId'] = $awUniqueId;
        return $this;
    }

    /**
    * Gets testMindId
    *  脑图id
    *
    * @return string|null
    */
    public function getTestMindId()
    {
        return $this->container['testMindId'];
    }

    /**
    * Sets testMindId
    *
    * @param string|null $testMindId 脑图id
    *
    * @return $this
    */
    public function setTestMindId($testMindId)
    {
        $this->container['testMindId'] = $testMindId;
        return $this;
    }

    /**
    * Gets testMindUrl
    *  脑图url
    *
    * @return string|null
    */
    public function getTestMindUrl()
    {
        return $this->container['testMindUrl'];
    }

    /**
    * Sets testMindUrl
    *
    * @param string|null $testMindUrl 脑图url
    *
    * @return $this
    */
    public function setTestMindUrl($testMindUrl)
    {
        $this->container['testMindUrl'] = $testMindUrl;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets caseTotal
    *  用例总数
    *
    * @return int|null
    */
    public function getCaseTotal()
    {
        return $this->container['caseTotal'];
    }

    /**
    * Sets caseTotal
    *
    * @param int|null $caseTotal 用例总数
    *
    * @return $this
    */
    public function setCaseTotal($caseTotal)
    {
        $this->container['caseTotal'] = $caseTotal;
        return $this;
    }

    /**
    * Gets execdTotal
    *  执行总数
    *
    * @return int|null
    */
    public function getExecdTotal()
    {
        return $this->container['execdTotal'];
    }

    /**
    * Sets execdTotal
    *
    * @param int|null $execdTotal 执行总数
    *
    * @return $this
    */
    public function setExecdTotal($execdTotal)
    {
        $this->container['execdTotal'] = $execdTotal;
        return $this;
    }

    /**
    * Gets isDirectRelation
    *  is_direct_relation
    *
    * @return bool|null
    */
    public function getIsDirectRelation()
    {
        return $this->container['isDirectRelation'];
    }

    /**
    * Sets isDirectRelation
    *
    * @param bool|null $isDirectRelation is_direct_relation
    *
    * @return $this
    */
    public function setIsDirectRelation($isDirectRelation)
    {
        $this->container['isDirectRelation'] = $isDirectRelation;
        return $this;
    }

    /**
    * Gets hasChild
    *  是否有子特性
    *
    * @return bool|null
    */
    public function getHasChild()
    {
        return $this->container['hasChild'];
    }

    /**
    * Sets hasChild
    *
    * @param bool|null $hasChild 是否有子特性
    *
    * @return $this
    */
    public function setHasChild($hasChild)
    {
        $this->container['hasChild'] = $hasChild;
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

