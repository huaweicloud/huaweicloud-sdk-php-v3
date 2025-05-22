<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachWikiDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachWikiDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issueId  工作项ID
    * wikiTitle  Wiki标题
    * wikiAuthor  wikiAuthor
    * project  project
    * createdDate  创建时间
    * wikiId  wiki ID
    * region  region值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issueId' => 'int',
            'wikiTitle' => 'string',
            'wikiAuthor' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleProject',
            'createdDate' => 'string',
            'wikiId' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issueId  工作项ID
    * wikiTitle  Wiki标题
    * wikiAuthor  wikiAuthor
    * project  project
    * createdDate  创建时间
    * wikiId  wiki ID
    * region  region值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issueId' => 'int32',
        'wikiTitle' => null,
        'wikiAuthor' => null,
        'project' => null,
        'createdDate' => null,
        'wikiId' => null,
        'region' => null
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
    * issueId  工作项ID
    * wikiTitle  Wiki标题
    * wikiAuthor  wikiAuthor
    * project  project
    * createdDate  创建时间
    * wikiId  wiki ID
    * region  region值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issueId' => 'issue_id',
            'wikiTitle' => 'wiki_title',
            'wikiAuthor' => 'wiki_author',
            'project' => 'project',
            'createdDate' => 'created_date',
            'wikiId' => 'wiki_id',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issueId  工作项ID
    * wikiTitle  Wiki标题
    * wikiAuthor  wikiAuthor
    * project  project
    * createdDate  创建时间
    * wikiId  wiki ID
    * region  region值
    *
    * @var string[]
    */
    protected static $setters = [
            'issueId' => 'setIssueId',
            'wikiTitle' => 'setWikiTitle',
            'wikiAuthor' => 'setWikiAuthor',
            'project' => 'setProject',
            'createdDate' => 'setCreatedDate',
            'wikiId' => 'setWikiId',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issueId  工作项ID
    * wikiTitle  Wiki标题
    * wikiAuthor  wikiAuthor
    * project  project
    * createdDate  创建时间
    * wikiId  wiki ID
    * region  region值
    *
    * @var string[]
    */
    protected static $getters = [
            'issueId' => 'getIssueId',
            'wikiTitle' => 'getWikiTitle',
            'wikiAuthor' => 'getWikiAuthor',
            'project' => 'getProject',
            'createdDate' => 'getCreatedDate',
            'wikiId' => 'getWikiId',
            'region' => 'getRegion'
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
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['wikiTitle'] = isset($data['wikiTitle']) ? $data['wikiTitle'] : null;
        $this->container['wikiAuthor'] = isset($data['wikiAuthor']) ? $data['wikiAuthor'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['wikiId'] = isset($data['wikiId']) ? $data['wikiId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    * Gets issueId
    *  工作项ID
    *
    * @return int|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param int|null $issueId 工作项ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets wikiTitle
    *  Wiki标题
    *
    * @return string|null
    */
    public function getWikiTitle()
    {
        return $this->container['wikiTitle'];
    }

    /**
    * Sets wikiTitle
    *
    * @param string|null $wikiTitle Wiki标题
    *
    * @return $this
    */
    public function setWikiTitle($wikiTitle)
    {
        $this->container['wikiTitle'] = $wikiTitle;
        return $this;
    }

    /**
    * Gets wikiAuthor
    *  wikiAuthor
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null
    */
    public function getWikiAuthor()
    {
        return $this->container['wikiAuthor'];
    }

    /**
    * Sets wikiAuthor
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUser|null $wikiAuthor wikiAuthor
    *
    * @return $this
    */
    public function setWikiAuthor($wikiAuthor)
    {
        $this->container['wikiAuthor'] = $wikiAuthor;
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
    * Gets createdDate
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets wikiId
    *  wiki ID
    *
    * @return string|null
    */
    public function getWikiId()
    {
        return $this->container['wikiId'];
    }

    /**
    * Sets wikiId
    *
    * @param string|null $wikiId wiki ID
    *
    * @return $this
    */
    public function setWikiId($wikiId)
    {
        $this->container['wikiId'] = $wikiId;
        return $this;
    }

    /**
    * Gets region
    *  region值
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
    * @param string|null $region region值
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

