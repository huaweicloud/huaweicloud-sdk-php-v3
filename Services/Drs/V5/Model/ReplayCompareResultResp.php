<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplayCompareResultResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplayCompareResultResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlTemplate  SQL模板
    * sqlTemplateMd5  SQL模板MD5哈希值
    * sqlParams  SQL参数
    * targetContent  目标库内容
    * mirrorContent  镜像库内容
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlTemplate' => 'string',
            'sqlTemplateMd5' => 'string',
            'sqlParams' => 'string',
            'targetContent' => 'string',
            'mirrorContent' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlTemplate  SQL模板
    * sqlTemplateMd5  SQL模板MD5哈希值
    * sqlParams  SQL参数
    * targetContent  目标库内容
    * mirrorContent  镜像库内容
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlTemplate' => null,
        'sqlTemplateMd5' => null,
        'sqlParams' => null,
        'targetContent' => null,
        'mirrorContent' => null,
        'createTime' => null
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
    * sqlTemplate  SQL模板
    * sqlTemplateMd5  SQL模板MD5哈希值
    * sqlParams  SQL参数
    * targetContent  目标库内容
    * mirrorContent  镜像库内容
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlTemplate' => 'sql_template',
            'sqlTemplateMd5' => 'sql_template_md5',
            'sqlParams' => 'sql_params',
            'targetContent' => 'target_content',
            'mirrorContent' => 'mirror_content',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlTemplate  SQL模板
    * sqlTemplateMd5  SQL模板MD5哈希值
    * sqlParams  SQL参数
    * targetContent  目标库内容
    * mirrorContent  镜像库内容
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlTemplate' => 'setSqlTemplate',
            'sqlTemplateMd5' => 'setSqlTemplateMd5',
            'sqlParams' => 'setSqlParams',
            'targetContent' => 'setTargetContent',
            'mirrorContent' => 'setMirrorContent',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlTemplate  SQL模板
    * sqlTemplateMd5  SQL模板MD5哈希值
    * sqlParams  SQL参数
    * targetContent  目标库内容
    * mirrorContent  镜像库内容
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlTemplate' => 'getSqlTemplate',
            'sqlTemplateMd5' => 'getSqlTemplateMd5',
            'sqlParams' => 'getSqlParams',
            'targetContent' => 'getTargetContent',
            'mirrorContent' => 'getMirrorContent',
            'createTime' => 'getCreateTime'
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
        $this->container['sqlTemplate'] = isset($data['sqlTemplate']) ? $data['sqlTemplate'] : null;
        $this->container['sqlTemplateMd5'] = isset($data['sqlTemplateMd5']) ? $data['sqlTemplateMd5'] : null;
        $this->container['sqlParams'] = isset($data['sqlParams']) ? $data['sqlParams'] : null;
        $this->container['targetContent'] = isset($data['targetContent']) ? $data['targetContent'] : null;
        $this->container['mirrorContent'] = isset($data['mirrorContent']) ? $data['mirrorContent'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets sqlTemplate
    *  SQL模板
    *
    * @return string|null
    */
    public function getSqlTemplate()
    {
        return $this->container['sqlTemplate'];
    }

    /**
    * Sets sqlTemplate
    *
    * @param string|null $sqlTemplate SQL模板
    *
    * @return $this
    */
    public function setSqlTemplate($sqlTemplate)
    {
        $this->container['sqlTemplate'] = $sqlTemplate;
        return $this;
    }

    /**
    * Gets sqlTemplateMd5
    *  SQL模板MD5哈希值
    *
    * @return string|null
    */
    public function getSqlTemplateMd5()
    {
        return $this->container['sqlTemplateMd5'];
    }

    /**
    * Sets sqlTemplateMd5
    *
    * @param string|null $sqlTemplateMd5 SQL模板MD5哈希值
    *
    * @return $this
    */
    public function setSqlTemplateMd5($sqlTemplateMd5)
    {
        $this->container['sqlTemplateMd5'] = $sqlTemplateMd5;
        return $this;
    }

    /**
    * Gets sqlParams
    *  SQL参数
    *
    * @return string|null
    */
    public function getSqlParams()
    {
        return $this->container['sqlParams'];
    }

    /**
    * Sets sqlParams
    *
    * @param string|null $sqlParams SQL参数
    *
    * @return $this
    */
    public function setSqlParams($sqlParams)
    {
        $this->container['sqlParams'] = $sqlParams;
        return $this;
    }

    /**
    * Gets targetContent
    *  目标库内容
    *
    * @return string|null
    */
    public function getTargetContent()
    {
        return $this->container['targetContent'];
    }

    /**
    * Sets targetContent
    *
    * @param string|null $targetContent 目标库内容
    *
    * @return $this
    */
    public function setTargetContent($targetContent)
    {
        $this->container['targetContent'] = $targetContent;
        return $this;
    }

    /**
    * Gets mirrorContent
    *  镜像库内容
    *
    * @return string|null
    */
    public function getMirrorContent()
    {
        return $this->container['mirrorContent'];
    }

    /**
    * Sets mirrorContent
    *
    * @param string|null $mirrorContent 镜像库内容
    *
    * @return $this
    */
    public function setMirrorContent($mirrorContent)
    {
        $this->container['mirrorContent'] = $mirrorContent;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

