<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestReportCustomDetailVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestReportCustomDetailVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  测试报告自定义模块Uri
    * name  测试报告自定义模块名称
    * display  是否显示(0:否，1:是)
    * description  描述
    * attachments  附件信息
    * creator  创建人ID
    * updator  修改人ID
    * testReportUri  测试报告uri
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'display' => 'int',
            'description' => 'string',
            'attachments' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AttachmentVo[]',
            'creator' => 'string',
            'updator' => 'string',
            'testReportUri' => 'string',
            'createTime' => '\DateTime',
            'createTimestamp' => 'int',
            'creatorName' => 'string',
            'updateTime' => '\DateTime',
            'updateTimestamp' => 'int',
            'updatorName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  测试报告自定义模块Uri
    * name  测试报告自定义模块名称
    * display  是否显示(0:否，1:是)
    * description  描述
    * attachments  附件信息
    * creator  创建人ID
    * updator  修改人ID
    * testReportUri  测试报告uri
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'display' => 'int32',
        'description' => null,
        'attachments' => null,
        'creator' => null,
        'updator' => null,
        'testReportUri' => null,
        'createTime' => 'date-time',
        'createTimestamp' => 'int64',
        'creatorName' => null,
        'updateTime' => 'date-time',
        'updateTimestamp' => 'int64',
        'updatorName' => null
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
    * uri  测试报告自定义模块Uri
    * name  测试报告自定义模块名称
    * display  是否显示(0:否，1:是)
    * description  描述
    * attachments  附件信息
    * creator  创建人ID
    * updator  修改人ID
    * testReportUri  测试报告uri
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'display' => 'display',
            'description' => 'description',
            'attachments' => 'attachments',
            'creator' => 'creator',
            'updator' => 'updator',
            'testReportUri' => 'test_report_uri',
            'createTime' => 'create_time',
            'createTimestamp' => 'create_timestamp',
            'creatorName' => 'creator_name',
            'updateTime' => 'update_time',
            'updateTimestamp' => 'update_timestamp',
            'updatorName' => 'updator_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  测试报告自定义模块Uri
    * name  测试报告自定义模块名称
    * display  是否显示(0:否，1:是)
    * description  描述
    * attachments  附件信息
    * creator  创建人ID
    * updator  修改人ID
    * testReportUri  测试报告uri
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'display' => 'setDisplay',
            'description' => 'setDescription',
            'attachments' => 'setAttachments',
            'creator' => 'setCreator',
            'updator' => 'setUpdator',
            'testReportUri' => 'setTestReportUri',
            'createTime' => 'setCreateTime',
            'createTimestamp' => 'setCreateTimestamp',
            'creatorName' => 'setCreatorName',
            'updateTime' => 'setUpdateTime',
            'updateTimestamp' => 'setUpdateTimestamp',
            'updatorName' => 'setUpdatorName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  测试报告自定义模块Uri
    * name  测试报告自定义模块名称
    * display  是否显示(0:否，1:是)
    * description  描述
    * attachments  附件信息
    * creator  创建人ID
    * updator  修改人ID
    * testReportUri  测试报告uri
    * createTime  创建时间
    * createTimestamp  创建时间戳
    * creatorName  创建人名
    * updateTime  修改时间
    * updateTimestamp  修改时间戳
    * updatorName  修改人名
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'display' => 'getDisplay',
            'description' => 'getDescription',
            'attachments' => 'getAttachments',
            'creator' => 'getCreator',
            'updator' => 'getUpdator',
            'testReportUri' => 'getTestReportUri',
            'createTime' => 'getCreateTime',
            'createTimestamp' => 'getCreateTimestamp',
            'creatorName' => 'getCreatorName',
            'updateTime' => 'getUpdateTime',
            'updateTimestamp' => 'getUpdateTimestamp',
            'updatorName' => 'getUpdatorName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['testReportUri'] = isset($data['testReportUri']) ? $data['testReportUri'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimestamp'] = isset($data['createTimestamp']) ? $data['createTimestamp'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['updatorName'] = isset($data['updatorName']) ? $data['updatorName'] : null;
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
    *  测试报告自定义模块Uri
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
    * @param string|null $uri 测试报告自定义模块Uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  测试报告自定义模块名称
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
    * @param string|null $name 测试报告自定义模块名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets display
    *  是否显示(0:否，1:是)
    *
    * @return int|null
    */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
    * Sets display
    *
    * @param int|null $display 是否显示(0:否，1:是)
    *
    * @return $this
    */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets attachments
    *  附件信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AttachmentVo[]|null
    */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
    * Sets attachments
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AttachmentVo[]|null $attachments 附件信息
    *
    * @return $this
    */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;
        return $this;
    }

    /**
    * Gets creator
    *  创建人ID
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
    * @param string|null $creator 创建人ID
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets updator
    *  修改人ID
    *
    * @return string|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param string|null $updator 修改人ID
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets testReportUri
    *  测试报告uri
    *
    * @return string|null
    */
    public function getTestReportUri()
    {
        return $this->container['testReportUri'];
    }

    /**
    * Sets testReportUri
    *
    * @param string|null $testReportUri 测试报告uri
    *
    * @return $this
    */
    public function setTestReportUri($testReportUri)
    {
        $this->container['testReportUri'] = $testReportUri;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimestamp
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreateTimestamp()
    {
        return $this->container['createTimestamp'];
    }

    /**
    * Sets createTimestamp
    *
    * @param int|null $createTimestamp 创建时间戳
    *
    * @return $this
    */
    public function setCreateTimestamp($createTimestamp)
    {
        $this->container['createTimestamp'] = $createTimestamp;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  修改时间戳
    *
    * @return int|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param int|null $updateTimestamp 修改时间戳
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets updatorName
    *  修改人名
    *
    * @return string|null
    */
    public function getUpdatorName()
    {
        return $this->container['updatorName'];
    }

    /**
    * Sets updatorName
    *
    * @param string|null $updatorName 修改人名
    *
    * @return $this
    */
    public function setUpdatorName($updatorName)
    {
        $this->container['updatorName'] = $updatorName;
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

