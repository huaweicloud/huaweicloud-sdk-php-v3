<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAppTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAppTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * category  模板使用场景
    * params  模板参数
    * image  模板镜像文件（base64编码）
    * deployCount  模板部署次数
    * version  模板版本
    * templateGuide  模板指南
    * createTime  模板创建时间
    * updateTime  模板更新时间
    * resources  模板资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'runtime' => 'string',
            'category' => 'string',
            'params' => 'string',
            'image' => 'string',
            'deployCount' => 'int',
            'version' => 'int',
            'templateGuide' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'resources' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\AppTemplateResourceDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * category  模板使用场景
    * params  模板参数
    * image  模板镜像文件（base64编码）
    * deployCount  模板部署次数
    * version  模板版本
    * templateGuide  模板指南
    * createTime  模板创建时间
    * updateTime  模板更新时间
    * resources  模板资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'runtime' => null,
        'category' => null,
        'params' => null,
        'image' => null,
        'deployCount' => 'int64',
        'version' => 'int64',
        'templateGuide' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'resources' => null
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
    * name  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * category  模板使用场景
    * params  模板参数
    * image  模板镜像文件（base64编码）
    * deployCount  模板部署次数
    * version  模板版本
    * templateGuide  模板指南
    * createTime  模板创建时间
    * updateTime  模板更新时间
    * resources  模板资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'runtime' => 'runtime',
            'category' => 'category',
            'params' => 'params',
            'image' => 'image',
            'deployCount' => 'deploy_count',
            'version' => 'version',
            'templateGuide' => 'template_guide',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * category  模板使用场景
    * params  模板参数
    * image  模板镜像文件（base64编码）
    * deployCount  模板部署次数
    * version  模板版本
    * templateGuide  模板指南
    * createTime  模板创建时间
    * updateTime  模板更新时间
    * resources  模板资源
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'runtime' => 'setRuntime',
            'category' => 'setCategory',
            'params' => 'setParams',
            'image' => 'setImage',
            'deployCount' => 'setDeployCount',
            'version' => 'setVersion',
            'templateGuide' => 'setTemplateGuide',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * category  模板使用场景
    * params  模板参数
    * image  模板镜像文件（base64编码）
    * deployCount  模板部署次数
    * version  模板版本
    * templateGuide  模板指南
    * createTime  模板创建时间
    * updateTime  模板更新时间
    * resources  模板资源
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'runtime' => 'getRuntime',
            'category' => 'getCategory',
            'params' => 'getParams',
            'image' => 'getImage',
            'deployCount' => 'getDeployCount',
            'version' => 'getVersion',
            'templateGuide' => 'getTemplateGuide',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'resources' => 'getResources'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['deployCount'] = isset($data['deployCount']) ? $data['deployCount'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['templateGuide'] = isset($data['templateGuide']) ? $data['templateGuide'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
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
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
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
    * @param string|null $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets runtime
    *  模板执行运行时
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime 模板执行运行时
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets category
    *  模板使用场景
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 模板使用场景
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets params
    *  模板参数
    *
    * @return string|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param string|null $params 模板参数
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets image
    *  模板镜像文件（base64编码）
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 模板镜像文件（base64编码）
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets deployCount
    *  模板部署次数
    *
    * @return int|null
    */
    public function getDeployCount()
    {
        return $this->container['deployCount'];
    }

    /**
    * Sets deployCount
    *
    * @param int|null $deployCount 模板部署次数
    *
    * @return $this
    */
    public function setDeployCount($deployCount)
    {
        $this->container['deployCount'] = $deployCount;
        return $this;
    }

    /**
    * Gets version
    *  模板版本
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 模板版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets templateGuide
    *  模板指南
    *
    * @return string|null
    */
    public function getTemplateGuide()
    {
        return $this->container['templateGuide'];
    }

    /**
    * Sets templateGuide
    *
    * @param string|null $templateGuide 模板指南
    *
    * @return $this
    */
    public function setTemplateGuide($templateGuide)
    {
        $this->container['templateGuide'] = $templateGuide;
        return $this;
    }

    /**
    * Gets createTime
    *  模板创建时间
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
    * @param int|null $createTime 模板创建时间
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
    *  模板更新时间
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
    * @param int|null $updateTime 模板更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets resources
    *  模板资源
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\AppTemplateResourceDetail[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\AppTemplateResourceDetail[]|null $resources 模板资源
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

