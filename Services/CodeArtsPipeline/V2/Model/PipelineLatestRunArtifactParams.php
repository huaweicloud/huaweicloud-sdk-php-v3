<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineLatestRunArtifactParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineLatestRun_artifact_params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  **参数解释**： 包版本。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 包名称。 **取值范围**： 不涉及。
    * organization  **参数解释**： docker组织。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'branchFilter' => 'string',
            'packageName' => 'string',
            'organization' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  **参数解释**： 包版本。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 包名称。 **取值范围**： 不涉及。
    * organization  **参数解释**： docker组织。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'branchFilter' => null,
        'packageName' => null,
        'organization' => null
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
    * version  **参数解释**： 包版本。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 包名称。 **取值范围**： 不涉及。
    * organization  **参数解释**： docker组织。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'branchFilter' => 'branch_filter',
            'packageName' => 'package_name',
            'organization' => 'organization'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  **参数解释**： 包版本。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 包名称。 **取值范围**： 不涉及。
    * organization  **参数解释**： docker组织。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'branchFilter' => 'setBranchFilter',
            'packageName' => 'setPackageName',
            'organization' => 'setOrganization'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  **参数解释**： 包版本。 **取值范围**： 不涉及。
    * branchFilter  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    * packageName  **参数解释**： 包名称。 **取值范围**： 不涉及。
    * organization  **参数解释**： docker组织。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'branchFilter' => 'getBranchFilter',
            'packageName' => 'getPackageName',
            'organization' => 'getOrganization'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['branchFilter'] = isset($data['branchFilter']) ? $data['branchFilter'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
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
    * Gets version
    *  **参数解释**： 包版本。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 包版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets branchFilter
    *  **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBranchFilter()
    {
        return $this->container['branchFilter'];
    }

    /**
    * Sets branchFilter
    *
    * @param string|null $branchFilter **参数解释**： 过滤分支。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBranchFilter($branchFilter)
    {
        $this->container['branchFilter'] = $branchFilter;
        return $this;
    }

    /**
    * Gets packageName
    *  **参数解释**： 包名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string|null $packageName **参数解释**： 包名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets organization
    *  **参数解释**： docker组织。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization **参数解释**： docker组织。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
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

