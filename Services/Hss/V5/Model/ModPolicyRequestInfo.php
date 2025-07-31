<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModPolicyRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModPolicyRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称
    * policyId  策略ID
    * templateId  模板ID
    * policyDescription  策略描述
    * content  content
    * whiteImageList  白名单镜像
    * resources  防护的资源信息
    * parameters  策略参数值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'policyId' => 'string',
            'templateId' => 'string',
            'policyDescription' => 'string',
            'content' => '\HuaweiCloud\SDK\Hss\V5\Model\PolicyContent',
            'whiteImageList' => '\HuaweiCloud\SDK\Hss\V5\Model\WhiteImageInfo[]',
            'resources' => '\HuaweiCloud\SDK\Hss\V5\Model\PolicyProtectScope[]',
            'parameters' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称
    * policyId  策略ID
    * templateId  模板ID
    * policyDescription  策略描述
    * content  content
    * whiteImageList  白名单镜像
    * resources  防护的资源信息
    * parameters  策略参数值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'policyId' => null,
        'templateId' => null,
        'policyDescription' => null,
        'content' => null,
        'whiteImageList' => null,
        'resources' => null,
        'parameters' => null
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
    * policyName  策略名称
    * policyId  策略ID
    * templateId  模板ID
    * policyDescription  策略描述
    * content  content
    * whiteImageList  白名单镜像
    * resources  防护的资源信息
    * parameters  策略参数值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'policyId' => 'policy_id',
            'templateId' => 'template_id',
            'policyDescription' => 'policy_description',
            'content' => 'content',
            'whiteImageList' => 'white_image_list',
            'resources' => 'resources',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称
    * policyId  策略ID
    * templateId  模板ID
    * policyDescription  策略描述
    * content  content
    * whiteImageList  白名单镜像
    * resources  防护的资源信息
    * parameters  策略参数值
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'policyId' => 'setPolicyId',
            'templateId' => 'setTemplateId',
            'policyDescription' => 'setPolicyDescription',
            'content' => 'setContent',
            'whiteImageList' => 'setWhiteImageList',
            'resources' => 'setResources',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称
    * policyId  策略ID
    * templateId  模板ID
    * policyDescription  策略描述
    * content  content
    * whiteImageList  白名单镜像
    * resources  防护的资源信息
    * parameters  策略参数值
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'policyId' => 'getPolicyId',
            'templateId' => 'getTemplateId',
            'policyDescription' => 'getPolicyDescription',
            'content' => 'getContent',
            'whiteImageList' => 'getWhiteImageList',
            'resources' => 'getResources',
            'parameters' => 'getParameters'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['policyDescription'] = isset($data['policyDescription']) ? $data['policyDescription'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['whiteImageList'] = isset($data['whiteImageList']) ? $data['whiteImageList'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if ((mb_strlen($this->container['templateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['policyDescription'] === null) {
            $invalidProperties[] = "'policyDescription' can't be null";
        }
            if ((mb_strlen($this->container['policyDescription']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyDescription', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyDescription']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyDescription', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyDescription'])) {
                $invalidProperties[] = "invalid value for 'policyDescription', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['whiteImageList'] === null) {
            $invalidProperties[] = "'whiteImageList' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
            if ((mb_strlen($this->container['parameters']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'parameters', the character length must be smaller than or equal to 1048576.";
            }
            if ((mb_strlen($this->container['parameters']) < 0)) {
                $invalidProperties[] = "invalid value for 'parameters', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['parameters'])) {
                $invalidProperties[] = "invalid value for 'parameters', must be conform to the pattern /^.*$/.";
            }
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
    * Gets policyName
    *  策略名称
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets templateId
    *  模板ID
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets policyDescription
    *  策略描述
    *
    * @return string
    */
    public function getPolicyDescription()
    {
        return $this->container['policyDescription'];
    }

    /**
    * Sets policyDescription
    *
    * @param string $policyDescription 策略描述
    *
    * @return $this
    */
    public function setPolicyDescription($policyDescription)
    {
        $this->container['policyDescription'] = $policyDescription;
        return $this;
    }

    /**
    * Gets content
    *  content
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PolicyContent
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PolicyContent $content content
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets whiteImageList
    *  白名单镜像
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WhiteImageInfo[]
    */
    public function getWhiteImageList()
    {
        return $this->container['whiteImageList'];
    }

    /**
    * Sets whiteImageList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WhiteImageInfo[] $whiteImageList 白名单镜像
    *
    * @return $this
    */
    public function setWhiteImageList($whiteImageList)
    {
        $this->container['whiteImageList'] = $whiteImageList;
        return $this;
    }

    /**
    * Gets resources
    *  防护的资源信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PolicyProtectScope[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PolicyProtectScope[] $resources 防护的资源信息
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets parameters
    *  策略参数值
    *
    * @return string
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param string $parameters 策略参数值
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

