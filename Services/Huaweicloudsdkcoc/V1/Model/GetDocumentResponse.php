<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDocumentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDocumentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  作业id
    * documentId  作业uuid
    * name  作业名称
    * content  作业内容，DSL语句
    * createTime  创建时间
    * updateTime  更新时间
    * version  作业版本，如v1
    * creator  创建人
    * modifier  修改人
    * enterpriseProjectId  企业项目id
    * versions  版本集合
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'documentId' => 'string',
            'name' => 'string',
            'content' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'version' => 'string',
            'creator' => 'string',
            'modifier' => 'string',
            'enterpriseProjectId' => 'string',
            'versions' => '\HuaweiCloud\SDK\Coc\V1\Model\DocumentVersionVo[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  作业id
    * documentId  作业uuid
    * name  作业名称
    * content  作业内容，DSL语句
    * createTime  创建时间
    * updateTime  更新时间
    * version  作业版本，如v1
    * creator  创建人
    * modifier  修改人
    * enterpriseProjectId  企业项目id
    * versions  版本集合
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'documentId' => null,
        'name' => null,
        'content' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'version' => null,
        'creator' => null,
        'modifier' => null,
        'enterpriseProjectId' => null,
        'versions' => null,
        'xRequestId' => null
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
    * id  作业id
    * documentId  作业uuid
    * name  作业名称
    * content  作业内容，DSL语句
    * createTime  创建时间
    * updateTime  更新时间
    * version  作业版本，如v1
    * creator  创建人
    * modifier  修改人
    * enterpriseProjectId  企业项目id
    * versions  版本集合
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'documentId' => 'document_id',
            'name' => 'name',
            'content' => 'content',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'version' => 'version',
            'creator' => 'creator',
            'modifier' => 'modifier',
            'enterpriseProjectId' => 'enterprise_project_id',
            'versions' => 'versions',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  作业id
    * documentId  作业uuid
    * name  作业名称
    * content  作业内容，DSL语句
    * createTime  创建时间
    * updateTime  更新时间
    * version  作业版本，如v1
    * creator  创建人
    * modifier  修改人
    * enterpriseProjectId  企业项目id
    * versions  版本集合
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'documentId' => 'setDocumentId',
            'name' => 'setName',
            'content' => 'setContent',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'version' => 'setVersion',
            'creator' => 'setCreator',
            'modifier' => 'setModifier',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'versions' => 'setVersions',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  作业id
    * documentId  作业uuid
    * name  作业名称
    * content  作业内容，DSL语句
    * createTime  创建时间
    * updateTime  更新时间
    * version  作业版本，如v1
    * creator  创建人
    * modifier  修改人
    * enterpriseProjectId  企业项目id
    * versions  版本集合
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'documentId' => 'getDocumentId',
            'name' => 'getName',
            'content' => 'getContent',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'version' => 'getVersion',
            'creator' => 'getCreator',
            'modifier' => 'getModifier',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'versions' => 'getVersions',
            'xRequestId' => 'getXRequestId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['documentId'] = isset($data['documentId']) ? $data['documentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['modifier'] = isset($data['modifier']) ? $data['modifier'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets id
    *  作业id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 作业id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets documentId
    *  作业uuid
    *
    * @return string|null
    */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
    * Sets documentId
    *
    * @param string|null $documentId 作业uuid
    *
    * @return $this
    */
    public function setDocumentId($documentId)
    {
        $this->container['documentId'] = $documentId;
        return $this;
    }

    /**
    * Gets name
    *  作业名称
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
    * @param string|null $name 作业名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets content
    *  作业内容，DSL语句
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 作业内容，DSL语句
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets version
    *  作业版本，如v1
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 作业版本，如v1
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets modifier
    *  修改人
    *
    * @return string|null
    */
    public function getModifier()
    {
        return $this->container['modifier'];
    }

    /**
    * Sets modifier
    *
    * @param string|null $modifier 修改人
    *
    * @return $this
    */
    public function setModifier($modifier)
    {
        $this->container['modifier'] = $modifier;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets versions
    *  版本集合
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\DocumentVersionVo[]|null
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\DocumentVersionVo[]|null $versions 版本集合
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

